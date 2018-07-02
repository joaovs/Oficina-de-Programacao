<html>
    <?php
        date_default_timezone_set('America/Sao_Paulo');
    ?>
    
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    </head>
    <body style="background-color: #eeeeee;">
        <div class="w-90 p-3" >
            <table class="table table-bordered table-striped">
                <tr class="table table-striped table-dark">
                    <th scope="col"> Data Atual: </th>
                    <th scope="col">
                        <?php
                            $data_atual = time ();
                			echo date (" d / m / Y", $data_atual);				
                        ?>
                    </th>
                    <th scope="col"> Hora Atual: </th>
                    <th scope="col">
                        <?php
                            $hora_atual = time ();
                            echo date (" H : i : s ", $hora_atual);
                        ?>
                    </th>
                </tr>
            </table>
        </div>
        
        <div class="w-90 p-3" style="background-color: #eee;">
            <table class="table table-bordered table-striped">
                <tr class="table table-striped table-dark">
                    
                    <th scope="col">Cômodos</th>
                    <th scope="col">Dispositivos</th>
                    <th scope="col">Acionamento</th>
                    <th scope="col">Horário</th>
                </tr>
                <tr>
                    <th scope="row">Sala</th>
                    <th scope="row">Lâmpada</th>
                    <th scope="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-danger active btn-sm">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Off
                            </label>
                        </div>
                    </th>
                    <th scope="row"> 03:00 até 04:30</th>
                </tr>
                <tr>
                    <th scope="row">Sala</th>
                    <th scope="row">Led</th>
                    <th scope="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-success btn-sm">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> On
                            </label>
                        </div>
                    </th>
                    <th scope="row"> 01:00 ate 02:00 </th>
                </tr>
                <tr> 
                    <th scope="row">Quarto</th>
                    <th scope="row">Televisão</th>
                    <th scope="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-danger active btn-sm">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Off
                            </label>
                        </div>
                    </th>
                    <th scope="row"> 05:10 ate 00:00 </th>
                </tr>
                <tr>
                    <th scope="row">Portão</th>
                    <th scope="row">Garagem</th>
                    <th scope="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-danger active btn-sm">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Off
                            </label>
                        </div>
                    </th>
                    <th scope="row"> 00:00 ate 00:00 </th>
                </tr>
                <tr>
                    
                    <th scope="row">Fechadura Eletrônica</th>
                    <th scope="row">Porta</th>
                    <th scope="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-success btn-sm">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> On
                            </label>
                        </div>
                    </th>
                    <th scope="row"> 00:00 ate 00:00 </th>
                </tr>
                <tr>    
                    <th scope="row">Quarto1</th>
                    <th scope="row">Ar Condicionado</th>
                    <th scope="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-success btn-sm">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> On
                            </label>
                        </div>
                    </th>
                    <th scope="row"> 00:00 ate 00:00 </th>
                </tr>
                <tr>    
                    <th scope="row">Quarto2</th>
                    <th scope="row">Ar Condicionado</th>
                    <th scope="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-success btn-sm">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> On
                            </label>
                        </div>
                    </th>
                    <th scope="row"> 00:00 ate 00:00 </th>
                </tr>
                <tr>    
                    <th scope="row">Cozinha</th>
                    <th scope="row">Luz</th>
                    <th scope="row">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-success btn-sm">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked> On
                            </label>
                        </div>
                    </th>
                    <th scope="row"> 00:00 ate 00:00 </th>
                </tr>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    </body>
</html>