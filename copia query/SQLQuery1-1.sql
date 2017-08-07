select top 10 * from ASARTE.dbo.factura

select top 10 * from ASARTE.dbo.Fact_reng  

select top 10 * from ASARTE.dbo.reng_fac

---------------------------------------------------------------------------

select fr.fact_num, COUNT(*) from ASARTE.dbo.Fact_reng fr, ASARTE.dbo.factura f where fr.fact_num=f.fact_num group by fr.fact_num

-----------------------------------------

select top 1 * from ASARTE.dbo.fact_reng order by fact_num asc

---------------------------------------------
select * from (select f.fact_num, f.co_cli, f.co_ven, fr.status, f.comentario,f.fec_emis, f.fec_venc, f.tot_bruto, f.tot_neto, ROW_NUMBER() OVER(PARTITION BY f.fact_num order by f.fact_num asc ) rn from ASARTE.dbo.Fact_reng fr, ASARTE.dbo.factura f where fr.fact_num=f.fact_num ) a where rn=1

-----------------------------------------------

INSERT INTO OPENQUERY (PRUEBA322,'select co_cli, fact_num,co_ven, status, comentario,fec_emis, fec_venc, tot_bruto, tot_neto, cond_pago from facturas')
select  co_cli, fact_num, co_ven, status, comentario,fec_emis, fec_venc, tot_bruto, tot_neto, cond_pago  from (select f.fact_num, f.co_cli, f.co_ven, fr.status, f.comentario,f.fec_emis, f.fec_venc, f.tot_bruto, f.tot_neto, c.cond_des as cond_pago, ROW_NUMBER() OVER(PARTITION BY f.fact_num order by f.fact_num asc ) rn from ASARTE.dbo.Fact_reng fr, ASARTE.dbo.factura f, ASARTE.dbo.condicio c where fr.fact_num=f.fact_num and f.forma_pag=c.co_cond ) a where rn=1 order by fact_num

select max(fact_num) from ASARTE.dbo.factura

select * from ASARTE.dbo.Fact_reng where fact_num=4476
select * from ASARTE.dbo.reng_fac where fact_num=4476
select * from ASARTE.dbo.factura where fact_num=4476

select f.forma_pag, c.cond_des,  COUNT(*) from ASARTE.dbo.factura f, asarte.dbo.condicio c where f.forma_pag=c.co_cond group by f.forma_pag,c.cond_des

-----------------------------------------------

select * from ASARTE.dbo.art

INSERT INTO OPENQUERY (PRUEBA322,'select co_art, art_des, fecha_reg, manj_ser, co_lin, co_cat, co_subl, co_color, precio from articulos')
select co_art, art_des, fecha_reg, manj_ser, co_lin, co_cat, co_subl, co_color, prec_vta1 from ASARTE.dbo.art

select count(*) from ASARTE.dbo.art


select top 20 * from ASARTE.dbo.Fact_reng where fact_num = 4474

INSERT INTO OPENQUERY (PRUEBA322,'select * from articulos_facturas') 
select fact_num,co_art from ASARTE.dbo.Fact_reng where co_art != ''

select * from ASARTE.dbo.reng_fac where fact_num= 4474

----------------------------------
