<?php
 
 function showproducts($conn, $type, $sql){
if($type == 1){
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $productbeschrijving = $row['description'];
            $productname = $row['name'];
            $productimg = $row['photo'];
            $productprijs = $row['price'];

            if ($productprijs < 1){ 
                $showprijs = "free"; 
            } else{
                $showprijs = $productprijs;
            }
        ?>
 <form action="shop.php" method="post">
        <div class="card" >
    
        <img src="<?php echo $productimg ?>" alt="Denim Jeans" style="width:100%"></a> 
        <h1 id="name"><?php echo $productname ?></h1>
        <p id="bescrijving"><?php echo $productbeschrijving ?></p>
        <p id="price" class="price"><?php echo "$".  $showprijs ?></p>
        <button type="submit" name="addproduct"></button>
        </div>
        <input type="hidden" name="productimg" value="<?php echo $productimg ?>">
        <input type="hidden" name="productname" value="<?php echo $productname ?>">
        <input type="hidden" name="productbeschrijving" value="<?php echo $productbeschrijving ?>">
        <input type="hidden" name="showprijs" value="<?php echo $showprijs ?>">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <Script>

        $(document).ready(function(){
             $(".card").click(function(){
             form.submit();
             });
            });
        </Script>
        </form>

        
        <?php
        
         }
      }
    }

 }
