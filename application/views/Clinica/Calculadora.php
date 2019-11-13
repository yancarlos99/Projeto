
<div class="container mt-5">
    <h2 class="text-center mt-2">Calculadora</h2>
   <form action="" class="col-md-6 mx-auto" method="post" >
      Digite um número: <input name="num1" type="text"><br>
      Digite outro número: <input name="num2" type="text"><br>
      <input type="submit" name="operacao" value="+">     
      <input type="submit" name="operacao" value="-">     
      <input type="submit" name="operacao" value="*">     
      <input type="submit" name="operacao" value="/"></br></br>   
      
        <?php

        $a = $_POST['num1'];
        $b = $_POST['num2'];
        $op= $_POST['operacao'];

        if( !empty($op) ) {
            if($op == '+')
                $c = $a + $b;
            else if($op == '-')
                $c = $a - $b;
            else if($op == '*')
                $c = $a*$b;
            else
                $c = $a/$b;
            echo "O seu lucro ou gasto foi de: $c";
        }
        ?>   
    </form>
</div>    
