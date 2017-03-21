<?php
App::uses('AppModel', 'Model');
/**
 * Factura Model
 *
 * @property categoria $Factura
 * @property Factura $Factura
 */
class Factura extends AppModel {


	public $hasOne = array (
		'Cliente' => array(
			'className' => 'Cliente',
			'foreignKey' => false,
             'conditions' => array(
                 'RTRIM(Factura.co_cli) = RTRIM(Cliente.co_cli)'
             )
		)
	);
	public $virtualFields = array(
    'dvenc' => 'NOW() - Factura.fec_venc'
	);
	function getCountFacturas($co_ven){
		$data = $this->query('SELECT COUNT(*) as count FROM facturas WHERE co_ven in '.'('.$co_ven.')');
		return $data;
	}

	function getCountFacturasVencidas($co_ven){
		$data = $this->query('SELECT COUNT(*) as count FROM facturas WHERE fec_venc < NOW() && status = "Sin Procesar" && co_ven in '.'('.$co_ven.')');
		return $data;
	}

	function getFacturasVencidas($co_ven , $page , $perPage){
		$offset = ($page - 1) * $perPage;
		$date = date("Y-m-d");
		$data = $this->query('SELECT * ,  DATEDIFF(NOW() , fec_venc) as diasvencida , NOW()  FROM facturas f , clientes c   WHERE  c.co_cli = f.co_cli AND f.status = "Sin Procesar" AND f.co_ven in '.'('.$co_ven.') AND f.fec_venc < NOW() ORDER BY f.fec_venc DESC');
		return $data;
	}

	function getFacturasVencidasCli($co_cli){
		
		$data = $this->query('SELECT * , DATEDIFF(NOW() , fec_venc) as diasvencida  FROM facturas  WHERE fec_venc < NOW() AND status = "Sin Procesar" AND co_cli = "'.$co_cli.'"');
		return $data;
	}

	function getFacturasCli($co_cli){
		
		$data = $this->query('SELECT *  FROM facturas  WHERE  co_cli = "'.$co_cli.'"');
		return $data;
	}

	function getFacturasCliPagadas($co_cli){
		
		$data = $this->query('SELECT *   FROM facturas  f WHERE f.status = "Procesados" AND co_cli = "'.$co_cli.'"');
		return $data;
	}

	function getCountFacturasAno($co_ven){
		$data = $this->query('SELECT extract(year from fec_emis) as ano,extract(month from fec_emis) as mes,  count(*) as cuantas FROM facturas  WHERE co_ven in '.'('.$co_ven.')  AND extract(year from fec_emis) = extract(year from NOW()) group by ano,mes');
		return $data;
	}

	function getFacturaDetalle($fact_num){
		$data = $this->query('SELECT  a.*  FROM  articulos_facturas af, articulos a where af.co_art = a.co_art AND af.fact_num = '.$fact_num);
		return $data;
	}

}