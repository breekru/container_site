<html>
    <body>
        <h3>Verify Data and Print</h3>
        Name: <?php echo $_POST['first_name']; echo " "; echo $_POST['last_name']; ?>
        <br>
        Phone Number: <?php echo $_POST['phone_num']; ?>
        <br>
        Email: <?php echo $_POST['email']; ?>
        <br>
        Device Type: <?php echo $_POST['dev_type']; ?>
        <br>
        Serial Number: <?php echo $_POST['sn']; ?>
        <br>
        Description of Issues: <?php echo $_POST['issue']; ?>
        <br>
        Accessories:
        <?php 
        echo $_POST['acc_power'];
        echo " ";
        echo $_POST['acc_mouse'];
        echo " ";
        echo $_POST['acc_keyboard'];
        echo " ";
        echo $_POST['acc_hdd'];
        ?>
        <br>
        Approval for Device Drop Off and Allowing work: <?php echo $_POST['perm1']; ?>
        <br>
        Approval regaurding Data loss acknowledgement: <?php echo $_POST['perm2']; ?>
    </body>
</html>
