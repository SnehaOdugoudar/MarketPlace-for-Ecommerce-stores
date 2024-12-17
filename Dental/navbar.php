<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services/Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="news.php">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="reviews.php">Customer Reviews</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="faqs.php">FAQs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contacts.php">CONTACT US</a>
        </li>
        <?php
        // echo "here-1";
          if(isset($_SESSION['Username'])):
            // echo "here-2";
            // echo $_SESSION['Username'];
            if($_SESSION['Username']=='admin' && $_SESSION['Password']=='admin'): 
              // echo "here-3";
            ?>
              <li class="nav-item">
                <a class="nav-link" href="Users.php">USERS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">LOGOUT</a>
              </li>
            <?php else: ?>
                <li class="nav-item">
                  <a class="nav-link" href="Login.php">ADMIN LOGIN</a>
                </li>
            <?php endif; ?>
          <?php else:?>
            <li class="nav-item">
                <a class="nav-link" href="Login.php">ADMIN LOGIN</a>
              </li>
          <?php endif; ?>
       </ul>
    </nav>