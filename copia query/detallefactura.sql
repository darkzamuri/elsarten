SELECT a.* FROM facturas f, articulos_facturas af, articulos a where  f.fact_num = af.fact_num AND af.co_art = a.co_art AND f.fact_num = 11842