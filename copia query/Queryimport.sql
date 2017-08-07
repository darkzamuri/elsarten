INSERT INTO OPENQUERY (PRUEBAM32, 'SELECT co_art,art_des,fecha_reg,manj_ser,co_lin,co_cat, co_subl,co_color,precio FROM articulos')
SELECT co_art,art_des,fecha_reg,manj_ser,co_lin,co_cat, co_subl,co_color,0  FROM elsartenwebdemo.dbo.art


INSERT INTO OPENQUERY (PRUEBAM322,'SELECT * FROM VENDEDORES')
SELECT * FROM elsartenwebdemo.DBO.vendedor;

insert into elsartenwebdemo.dbo.PRUEBAT VALUES(2,'HOLA',2);