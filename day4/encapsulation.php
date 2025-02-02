<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Encapsulation
    class bankaccount{
        private $balance;

        public function setbalance($amount){
            if($amount>0){
                $this ->balance = $amount;
            
            }
        }
        public function getbalance(){
            return $this->balance;

        }
    }
    $account  = new bankaccount();
    $account->setbalance(500000);
    echo "account balanced :".$account->getbalance();
    
    
    
    
    
    
    
    
    
    ?>
    
</body>
</html>