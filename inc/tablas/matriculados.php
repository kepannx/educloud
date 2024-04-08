        <div class="block-title">
            <h2><strong><i class="fa fa-child"></i> Estudiantes </strong>Matriculados</h2>
        </div>
        <p>Lista de todos los estudiantes matriculados en los programas ofrecidos por la institución que iniciaron el proceso de matricula.</p>



        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center"><i class="gi gi-user"></i></th>
                        <th class="text-center">Nombres</th>
                        <th>Identificación</th>
                        <th>Telefono (wsp)</th>
                        <th>Estado</th>
                        <th class="text-center">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $labels['0']['class'] = "label-success";
                    $labels['0']['text'] = "Inscrito";

                    $labels['1']['class'] = "label-info";
                    $labels['1']['text'] = "Pendiente Por Documentos";

                    $labels['2']['class'] = "label-primary";
                    $labels['2']['text'] = "Inscrito, Sin Terminar Matricula";

                    $labels['3']['class'] = "label-success";
                    $labels['3']['text'] = "Matriculado sin novedad";
                    ?>


                    <?php 
                    //Ciclos for
                    for($i=1; $i<67; $i++) { 



                        ?>
        
                    <tr>
                        <td class="text-center">
                           <img src="<?php echo BASEPATH; ?>img/placeholders/avatars/avatar<?php echo rand(1, 14); ?>.jpeg" alt="avatar" class="img-circle" width="50" height="50">
                        </td>

                        <td class="text-center">
                            
                            <?php 

                            $nombres = generarNombresAleatorios(1);
                                foreach ($nombres as $nombre) {
                                    echo $nombre . "<br>";
                                }

                         ?>

                        </td>
                        
                        <td ><a href="javascript:void(0)" align="text-center"><?php echo rand(4000000, 6000000); ?></a></td>
                        
                        <td><?php  $numeroTelefono = rand(300000000, 322000000) ?><a href="https://api.whatsapp.com/send?phone=57<?php echo $numeroTelefono ?>" target="_blank"><?php echo $numeroTelefono; ?></td>
                        <?php $rand = rand(1, 3); ?>
                        
                        <td><span class="label<?php echo ($labels[$rand]['class']) ? " " . $labels[$rand]['class'] : ""; ?>"><?php echo $labels[$rand]['text']; ?></span></td>
                        

                        <td class="text-center">
                            <div class="btn-group">
                                <a href="estudiantes/perfilEstudiante.php" data-toggle="tooltip" title="Mas Información" class="btn btn-xs btn-info"><i class="fa fa-info"></i></a>


                                <a href="javascript:void(0)" data-toggle="tooltip" title="Editar" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                <a href="javascript:void(0)" data-toggle="tooltip" title="Borrar" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>



                            </div>
                        </td>


                    </tr>
                    <?php } ?>




                </tbody>
            </table>
        </div>

