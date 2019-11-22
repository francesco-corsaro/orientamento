<?php
class Inserisci {
    public $categoria1;
    public $categoria2;
    protected  $servername = "localhost";
    protected  $username = "psicorientamento";
    protected  $password ;
    protected  $dbname = " my_psicorientamento";
    
    protected function Carica ($categoria1, $categoria2){
        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // prepare sql and bind parameters
            $stmt = $conn->prepare("INSERT INTO Identificativo (Categoria1, Categoria2)
            VALUES (:Categoria1, :Categoria2");
            $stmt->bindParam(':Categoria1', $cat1);
            $stmt->bindParam(':Categoria2', $cat2);
            
            
            // insert a row
            $cat1 = $categoria1;
            $cat2 = $categoria2;
            
            $stmt->execute();
            
            /* insert another row
            $firstname = "Mary";
            $lastname = "Moe";
            $email = "mary@example.com";
            $stmt->execute();
            
            // insert another row
            $firstname = "Julie";
            $lastname = "Dooley";
            $email = "julie@example.com";
            $stmt->execute();
            
            echo "New records created successfully";
      */  }
        catch(PDOException $e)
        {
            echo "Error: " . $e->getMessage();
        }
        $conn = null;
    }
}
$carica=new Inserisci()
?>
