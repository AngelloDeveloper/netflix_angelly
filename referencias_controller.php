<?php 
    include('conexion.php'); 
    session_start();
    //UPDATE
    if (!empty($_POST) && $_POST['type'] == 'update') {
        $arrData = [];
        foreach($_POST['data'] as $data) {
            switch ($data['name']) {
                case 'monto':
                    $arrData['monto'] = (float)$data['value'];
                break;
                case 'ban':
                    $arrData['ban'] = (int)$data['value'];
                break;
                case 'date':
                    $arrData['date'] = date("Y-m-d H:i:s", strtotime($data['value']));
                break;
                default:
                    $arrData[$data['name']] = $data['value'];
                break;
            }
        }
        // echo $id .','. $cod .','. $date.','. $monto .','. $banco;
        $querys = "SELECT * FROM referencia WHERE refCod = {$arrData['ref']}";
        $ver_query =  mysqli_query($conexion, $querys);
    
        if (mysqli_num_rows($ver_query) > 0) {
            echo json_encode([
                'STATUS' => 'WARNING',
                'CODE' => 204,
                'MESSAGES' => "transferencia ya existe"
            ]);
            } else {
                $query = "UPDATE 
                        `referencia` 
                    SET 
                        `refCod`= '{$arrData['ref']}',
                        `dateRef`='{$arrData['date']}',
                        `monRef`= {$arrData['monto']},
                        `idBan`= {$arrData['ban']} 
                    WHERE 
                        idRef = {$arrData['id']}
                ";
    
                mysqli_query($conexion, $query);
    
                echo json_encode([
                    'STATUS' => 'SUCCESS',
                    'CODE' => 200,
                    'MESSAGES' => "registro exitoso"
                ]);
        }
    }

    //INSERT
    if(!empty($_POST) && $_POST['type'] == 'insert') {
        $arrData = [];
        foreach($_POST['data'] as $data) {
            switch ($data['name']) {
                case 'select':
                    $explode = explode('/', $data['value']);
                    $arrData['banco'] = $explode[0];
                    $arrData['refCompuesto'] = $arrData['ref'].$explode[1];
                break;
                case 'date':
                    $arrData[$data['name']] = date("Y-m-d H:i:s", strtotime($data['value']));
                break;
                default:
                    $arrData[$data['name']] = $data['value'];
                break;
            } 
        }

        $ver_sql = "SELECT * FROM  referencia WHERE refCod = '{$arrData["ref"]}'";
        $ver_query =  mysqli_query($conexion, $ver_sql);

        if (mysqli_num_rows($ver_query) > 0) {
            echo json_encode([
                'STATUS' => 'WARNING',
                'CODE' => 204,
                'MESSAGES' => "transferencia ya existe"
            ]);
        }else {
          $sql = "INSERT INTO 
            referencia (
                `refCod`, 
                `dateRef`,
                `refCompuesto`,
                `monRef`,
                `idBan`,
                `status`
            )
            VALUES(
                '{$arrData["ref"]}', 
                '{$arrData["date"]}', 
                '{$arrData["refCompuesto"]}', 
                '{$arrData["monto"]}',
                '{$arrData["banco"]}', 
                1
            )";
  
            $query = mysqli_query($conexion, $sql);
            echo json_encode([
                'STATUS' => 'SUCCESS',
                'CODE' => 200,
                'MESSAGES' => "registro exitoso"
            ]);
        }
    }
?>