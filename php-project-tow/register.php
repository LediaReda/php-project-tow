<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>

<div class="container">
    <div class="row">
       <div class="col-8 mx-auto my-5">
        <h2 class="border p-2 my-2 text-center">Register</h2>
            <form action="handelers/handelRegister.php" method="POST" class="border p-3">
                <div class="form-group p-2 my-1">
                    <label for="email">Name</label>
                    <input type="name" name="name" class="form-control" id="name">
                </div>
                <div class="form-group p-2 my-1">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>
                <div class="form-group p-2 my-1">   
                    <label for="Password">Password</label>
                    <input type="password" name="Password" class="form-control" id="Password">
                </div>
                <div class="form-group p-2 my-1"> 
                    <input type="submit" value="Register" class="form-control">
                </div>    
            
            </form>       
               
        </div>
    
    </div>

</div>
    
    

<?php include 'inc/footer.php'; ?>

