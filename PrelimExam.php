<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="styles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    
  
    
  </head>


<div class='container'>
  <div class='window'>
    <div class='order-info'>
      <div class='order-info-content'>
        <h2>Order Summary</h2>
        <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <form action="" method="post">
            <tr>
              <td><img src='https://cf.shopee.ph/file/491d14caf683ba4c57a3d2416290f10b' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>Front and rear brake cables</span>
                <br> Qty: <input type="number" name="Qty1" ><br> <span class='thin small'> <br></span>
                 
                <span class='thin small'>
                <?php
                error_reporting (E_ALL ^ E_NOTICE);
                //Retrieve name from query string and store to a local variable
                   $Qtya = $_POST['Qty1'];
                   $Name = $_POST['BillName'];
                   if($Name!=""){
                   if($Qtya!=""){ 
                   $Amount = +100.00 * +$Qtya;
                    $floatAmount1 = floatval($Amount);
                      echo "Qty: $Qtya ||";
                      
                      echo "\r\n<font color=red> Amount = $$floatAmount1.00</font>";    
                      }
                    }
                ?>
                </span>
               
              </td>

            </tr>
            <tr>
              <td>
                <div class='price'>$100.00</div>
              </td>
            </tr>
          </tbody>

        </table>
        <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='https://i2.wp.com/hub.chainreactioncycles.com/wp-content/uploads/2014/10/BMX.jpg?fit=760%2C540&ssl=1' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>New set of pedal arms</span>
                <br>Qty: <input type="text" name="Qty2"><br> <span class='thin small'><br></span>
                <span class='thin small'>
                <?php 
                error_reporting (E_ALL ^ E_NOTICE);
                //Retrieve name from query string and store to a local variable
                  $Qtyb = $_POST['Qty2'];
                  $Name = $_POST['BillName'];
                  if($Name!=""){
                  if($Qtyb!=""){ 
                  $Amount = +15.00 * +$Qtyb;
                  $floatAmount1 = floatval($Amount);
                  echo "Qty: $Qtyb ||";
                  
                  echo "<font color=red> Amount = $$floatAmount1.00</font>"; 
                  }
                }
                ?>
                </span>  
              </td>
              </tr>
            <tr>
              <td>
                <div class='price'>$15.00</div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class='line'></div>
        <table class='order-table'>
          <tbody>
            <tr>
              <td><img src='https://static.onecms.io/wp-content/uploads/sites/38/2019/07/09190102/ChildLaborCaitlin-Marie-Miner-Ong.png' class='full-width'></img>
              </td>
              <td>
                <br> <span class='thin'>Labor 3h</span>
                <br>Qty: <input type="text" name="Qty3"><br> <span class='thin small'><br></span>
                <span class='thin small'>
                <?php 
                error_reporting (E_ALL ^ E_NOTICE);
                //Retrieve name from query string and store to a local variable
                  $Qtyc = $_POST['Qty3'];
                  $Name = $_POST['BillName'];
                  if($Name!=""){
                  if($Qtyc!=""){ 
                  $Amount = +5.00 * +$Qtyc;
                    $floatAmount1 = floatval($Amount);
                      echo "Qty: $Qtyc ||"; 
                     
                      echo "<font color=red> Amount = $$floatAmount1.00</font>";  
                  } 
                } 
                ?>
                </span>
              </td>

            </tr>
            <tr>
              <td>
                <div class='price'>$5.00</div>
              </td>
            </tr>
          </tbody>
        </table>
        <div class='line'></div>
        <div class='total'>
          <span style='float:left;'>
            <div class='thin dense'>Bill To</div>
            <div class='thin dense'><br></div>
            TOTAL
          </span>
          <span style='float:right; text-align:right;'>
            <div class='thin dense'><?php 
            $BillName = $_POST['BillName'];

            echo "$BillName";
            
            
            ?></div>
            <div class='thin dense'><br></div>
            <?php 
            $Name = $_POST['BillName'];
            if(($Name!="" && $Qty1 !=""&& $Qty2 !=""&& $Qty3!="")){
            $Qty1 = $_POST['Qty1'];
            $Qty2 = $_POST['Qty2'];
            $Qty3 = $_POST['Qty3'];
            $Amount1 = +100.00 * +$Qty1;
            $Amount2 = +15.00 * +$Qty2;
            $Amount3 = +5.00 * +$Qty3;
            $Total = +$Amount1 + +$Amount2 + +$Amount3;
            echo "$$Total.00";
            }  
            ?>
          </span>
        </div>
      </div>
    </div>
    <div class='credit-info'>
      <div class='credit-info-content'>
        <table class='half-input-table'>
          <tr>
                </div>
              </div>
            </td>
          </tr>
        </table>
        <p class="Check">Checkout</p>
        <p class='Margin'>Bill Name</p>
        <input type="text" name="BillName" class='input-field' placeholder="Input Name Here..."></input>
        <?php 
        error_reporting (E_ALL ^ E_NOTICE);
        $Name = $_POST['BillName'];
        if($Name==""){
            echo "<font color=red> Please Complete The Following... </font>";
            
        }
        ?>
        <table class='half-input-table'>
          <tr>
            
            
          </tr>
        </table>
     <input type="submit" value="Checkout" class='pay-btn'>

      </div>

    </div>
  </div>
</div>
  </form>
</html>