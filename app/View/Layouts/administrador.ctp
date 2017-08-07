<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico?v=3" type="image/x-icon" />
    <title>Administracion El Sarten</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->webroot;?>admin_template/css/bootstrap.min.css" rel="stylesheet">
    
    
    <link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo $this->webroot;?>admin_template/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo $this->webroot;?>admin_template/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $this->webroot;?>admin_template/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo $this->webroot;?>admin_template/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $this->webroot;?>js/sliptree-boostrap/dist/css/bootstrap-tokenfield.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="<?php echo $this->webroot;?>img/elsarten512x512.png" width="50" height="30" class="" style="display:inline"> <span>Administracion</span></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $this->UserAuth->getUser()['User']['username']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $this->UserAuth->getUser()['User']['username']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $this->UserAuth->getUser()['User']['username']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $this->UserAuth->getUser()['User']['username']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li> 
                            <a href="<?php echo $this->webroot.'/viewUser/'.$this->UserAuth->getUserId();?>"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Cambiar Contraseña</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo $this->webroot;?>logout"><i class="fa fa-fw fa-power-off"></i> Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php $cc = $this->params->controller;?>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active" >
                        <a href="<?php echo $this->webroot;?>/dashboard"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#m1"><i class="fa fa-fw fa-users"></i> Vendedores <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="m1" class="collapse">
                            <li>

                                <?php echo $this->Html->link(__("Agregar Nuevo",true),"/Vendedores/add") ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__("Ver todos",true),"/Vendedores/") ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#m2"><i class="fa fa-fw fa-users"></i> Clientes <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="m2" class="collapse">
                            <li>
                                <?php echo $this->Html->link(__("Agregar Nuevo",true),"/Clientes/add") ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__("Ver Todos",true),"/Clientes") ?>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo $this->webroot;?>Facturas"><i class="fa fa-fw fa-money"></i> Facturas </a>
                        
                    </li>
                    <li>
                        <a href="<?php echo $this->webroot;?>Presupuestos"><i class="fa fa-fw fa-money"></i> Presupuestos </a>
                        
                    </li>
                    <li>
                        <a href="<?php echo $this->webroot;?>Articulos"><i class="fa fa-fw fa-shopping-cart"></i> Productos </a>
                        
                    </li>
                    <li>
                        <a href="<?php echo $this->webroot;?>Lins"><i class="fa fa-fw fa-shopping-cart"></i> Categorias </a>
                        
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#m4"><i class="fa fa-fw fa-users"></i> Usuarios <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="m4" class="collapse">
                            <li>
                                <?php echo $this->Html->link(__("Agregar Nuevo",true),"/addUser") ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link(__("Ver Usuarios",true),"/allUsers") ?>
                            </li>
                            <li>
                                 <?php echo $this->Html->link(__("Agregar Grupo",true),"/addGroup") ?>
                            </li>
                            <li>
                                 <?php echo $this->Html->link(__("Ver Grupos",true),"/allGroups") ?>
                            </li>
                            <li>
                                 <?php echo $this->Html->link(__("Permisos",true),"/permissions") ?>
                            </li>
                            

                            </li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
             <?php echo $this->Session->flash(); ?>

               <?php echo $this->fetch('content'); ?>
               
            
   
         
                
               

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    
     <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->webroot;?>admin_template/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $this->webroot;?>js/pekeUpload.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo $this->webroot;?>admin_template/js/plugins/morris/raphael.min.js"></script>

    <script src="<?php echo $this->webroot;?>admin_template/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo $this->webroot;?>js/sliptree-boostrap/js/bootstrap-tokenfield.js"></script>
    <script src="<?php echo $this->webroot;?>admin_template/js/dataTables.bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            var idArt = 0;
            $('#table').DataTable({"language": {
                "url" : "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
             }});
            $('.modal1').click(function(){
                idArt = $(this).data('id');
                $("#image").pekeUpload({
                    showPreview : true ,
                    showPercent : true ,
                    allowedExtensions : 'png|jpg|jpeg',
                    url : 'Articulos/fileUpload',
                    data : {articulo_id : idArt.trim()},
                    onFileSuccess : function(file,data){
                        window.location.reload();
                    }
                });

            });

            $('.imagen').click(function(){
                var imagen = $(this).data('imagen');
                
                $('#previewimg').attr('src' , imagen);
            });
            var codigosData = [];
            var codigoVendedores = new Array();
            var x = 0;
            $.get('Vendedores/getVendedores', function(data) {
                    codigosData = data;
                }, 'json')
                .done(function() {
           
                    $.each( codigosData, function( key, value ) {
                      codigoVendedores.push({label : value.Vendedore.ven_des , value : value.Vendedore.co_ven.trim()});
                      
                      
                      x++;
                    });
                    console.log(codigoVendedores);
                    $('#codigos').tokenfield({
                      autocomplete: {
                        source: codigoVendedores,
                        delay: 100
                      },
                      showAutocompleteOnFocus: true
                    });
            });
            
            
            
        });
    </script>
  


</body>
<?php echo $this->element('sql_dump'); ?>
</html>
