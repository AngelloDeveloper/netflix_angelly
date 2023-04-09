<?php
 require('conexion.php'); 

// echo $_FILES['file']['name'];
// echo '<br>';
// echo $banco = $_POST['select'];
// die();
// echo $typBanc;
// die();
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use Carbon\Carbon;
class import
{
  public $row = '';
  public $archivo;
  public $conexion;
  public $banco;
  public $fecha;
  public $descripcion;
  public $referencia;
  public $entrada;
  public $salida;
  public $typBanc;

  public function __construct($archivo, $conexion, $banco, $typBanc)
  {
    $this->archivo = $archivo;
    $this->conexion = $conexion;
    $this->banco = $banco;
    $this->typBanc= $typBanc;

  }

  public function render()
  {
        
        $nombreArchivo = $this->archivo;        
        $documento = IOFactory::load($nombreArchivo);        
        $totalHojas = $documento->getSheetCount();
        $hojaActual = $documento->getSheet(0);
        $numeroFilas = $hojaActual->getHighestDataRow();
        $letra = $hojaActual->getHighestColumn();
        $numeroLetra = Coordinate::columnIndexFromString($letra); 

        for ($i = 1; $i <= $numeroFilas; $i++) {
         switch ($this->banco) {
          case '1':
            # provincial
            if ($i === 1) {
              $i = 2;
              
            }
              self::colProvincial($hojaActual, $i);


            break;
          case '2':
            # mercantil
            
              self::colMercantil($hojaActual, $i);
            break;
            case '3':
              # bicentenario
              if ($i === 1) {
                $i = 2;
              }
              
                self::colBicentenario($hojaActual, $i);
              break;
          
          default:
            # code...
            break;
         }
          // $fecha = $hojaActual->getCellByColumnAndRow(1, $i);
          // $descripcion = $hojaActual->getCellByColumnAndRow(2, $i);
          // $referencia = $hojaActual->getCellByColumnAndRow(3, $i);          
          // $banco =  $this->banco;
          // $entrada = $hojaActual->getCellByColumnAndRow(4, $i);        
          // $salida = $hojaActual->getCellByColumnAndRow(5, $i);
          $sqls = "SELECT exc.`idExc`, exc.`fchExc`, exc.`DesExc`, ban.`typBan`, exc.`refExc`,  exc.`salExc`, exc.`entExc`
          FROM excel exc
          INNER join banco ban
          ON exc.idBan = ban.idBan
          WHERE refExc ='$this->referencia'";          
          $result = $this->conexion->query($sqls);
         
          //  var_dump($result->num_rows);
          
          
          if ($result->num_rows == 0) {
            
            $this->rows();
            // self::rows();
          //  if ($this->referencia == 0) {
          //   # code...
          //  }
          $sql = "INSERT INTO `excel`(`fchExc`, `DesExc`, `idBan`, `refExc`,  `salExc`,`entExc`,`status`) 
                  VALUES ('$this->fecha', '$this->descripcion', '$this->banco', '$this->referencia', '$this->salida', '$this->entrada', 0)";
            
          $result = $this->conexion->query($sql);
            
                }
          
        }
        return $this->row;
    
    

  }

  

  private function rows(){
    
    $this->row.= '<tr>';
    $this->row.= '<td>' . str_replace('-', '/', date('Y-m-d', strtotime($this->fecha))) . '</td>';
    $this->row.= '<td>' . $this->descripcion . '</td>';
    $this->row.= '<td>' . $this->referencia . '</td>';
    $this->row.= '<td>' .  $this->typBanc . '</td>';
    $this->row.= '<td>' . $this->entrada . '</td>';
    $this->row.= '<td>' . $this->salida . '</td>';
    $this->row.= '</tr>';
  }
  
    

  private function colMercantil($hojaActual, $i){
    $this->fecha =self::setDate($hojaActual->getCellByColumnAndRow(1, $i));
    $this->descripcion = $hojaActual->getCellByColumnAndRow(2, $i);
    $this->referencia = $hojaActual->getCellByColumnAndRow(3, $i);          
 
    $this->entrada = $hojaActual->getCellByColumnAndRow(4, $i);        
    $this->salida = $hojaActual->getCellByColumnAndRow(5, $i);
  }

  private function colVenezuela($hojaActual, $i){
    $this->fecha =self::setDate($hojaActual->getCellByColumnAndRow(1, $i));
    $this->descripcion = $hojaActual->getCellByColumnAndRow(2, $i);
    $this->referencia = $hojaActual->getCellByColumnAndRow(3, $i);          
 
    $this->entrada = $hojaActual->getCellByColumnAndRow(4, $i);        
    $this->salida = $hojaActual->getCellByColumnAndRow(5, $i);
  }
  private function colSofitasa($hojaActual, $i){
    $this->fecha =self::setDate($hojaActual->getCellByColumnAndRow(1, $i));
    $this->descripcion = $hojaActual->getCellByColumnAndRow(2, $i);
    $this->referencia = $hojaActual->getCellByColumnAndRow(3, $i);          
 
    $this->entrada = $hojaActual->getCellByColumnAndRow(4, $i);        
    $this->salida = $hojaActual->getCellByColumnAndRow(5, $i);
  }

  private function colProvincial($hojaActual, $i){
    $this->fecha =self::setDate($hojaActual->getCellByColumnAndRow(5, $i));
    $this->descripcion = $hojaActual->getCellByColumnAndRow(1, $i);
    $this->referencia = $hojaActual->getCellByColumnAndRow(6, $i);          
    
    $this->entrada = $hojaActual->getCellByColumnAndRow(2, $i);        
    $this->salida = $hojaActual->getCellByColumnAndRow(3, $i);
  }

  private function colBicentenario($hojaActual, $i){
    $this->fecha =self::setDate($hojaActual->getCellByColumnAndRow(5, $i));
    $this->descripcion = $hojaActual->getCellByColumnAndRow(1, $i);
    $this->referencia = $hojaActual->getCellByColumnAndRow(6, $i);          
    
    $this->entrada = $hojaActual->getCellByColumnAndRow(2, $i);        
    $this->salida = $hojaActual->getCellByColumnAndRow(3, $i);
  }

  private function colBanesco($hojaActual, $i){
    $this->fecha =self::setDate($hojaActual->getCellByColumnAndRow(1, $i));
    $this->descripcion = $hojaActual->getCellByColumnAndRow(2, $i);
    $this->referencia = $hojaActual->getCellByColumnAndRow(3, $i);          
 
    $this->entrada = $hojaActual->getCellByColumnAndRow(4, $i);        
    $this->salida = $hojaActual->getCellByColumnAndRow(5, $i);
  }

  private function setDate($fecha){
    $array = explode('/', $fecha);
    if (count($array) > 1) {
      $newFch = $array[2]. '-'. $array[1]. '-'. $array[0];
      return $newFch;
    }
    
    // var_dump($fecha);
    // die();
    // echo $fecha;
    // echo '<br>';
    
    return Carbon::now()->format('Y-m-d');


  }
}