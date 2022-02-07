<html>
    <head>
        <title>WPS Intake Form</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body> 
        <h2>Laptop Intake Work Form</h2>
        <form action="dbsend.php" id="intake" method="post">
            <label for="first_name">First Name:</label><br>
            <input type="text" name="first_name" id="first_name" autofocus>
            <br>
            <label for="last_name">Last Name:</label><br>
            <input type="text" name="last_name" id="last_name">
            <br>
            <label for="phone_num">Phone Number:</label><br>
            <input type="text" name="phone_num" id="phone_num">
            <br>
            <label for="email">Email:</label><br>
            <input type="text" name="email" id="email">
            <br>
            <label for="dev_type">Device Type: </label><br>
            <select id="dev_type" name="dev_type" form="intake">
                <option value="Desktop">Desktop</option>
                <option value="Laptop">Laptop</option>
                <option value="Tablet">Tablet</option>
                <option value="Chromebook">Chromebook</option>
                <option value="Other">Other</option>
            </select>
            <br>
            <label for="sn">Serial Number: </label><br>
            <input type="text" name="sn" id="sn">
            <br>
            <fieldset>
                <legend>Accessories(Check all that apply)</legend>
                <input type="checkbox" id="acc_power" name="acc_power" value="Powercord">
                <label for="acc_power">Power/Charging Cable</label>
                <input type="checkbox" id="acc_mouse" name="acc_mouse" value="Mouse">
                <label for="acc_mouse">Mouse</label>
                <input type="checkbox" id="acc_keyboard" name="acc_keyboard" value="Keyboard">
                <label for="acc_keyboard">Keyboard</label>
                <input type="checkbox" id="acc_hdd" name="acc_hdd" value="Ext Drive">
                <label for="acc_hdd">External Hard Drive</label>
            </fieldset>

            <br>
            <label for="issue">Describe Issue: </label><br>
            <textarea name="issue" rows="10" cols="30"></textarea>
            <fieldset>
                <legend>Authorization</legend>
                <h4>By inputting your initials you are agreeing that you left the documented devices with WPS and are permitting them to work on it.</h4>
                <br>
                <label for="perm1">Initials:</label>
                <input type="text" name="perm1" id="perm1">
                <br>
                <br>
                <h4>By inputting your initials you are agreeing that you understand that there is potential for data loss when performing any type of diagnostics or repairs on a device. You either have a personal backup or have added the preliminary clone service to the work being performed today.</h4>
                <label for="perm2">Initials:</label>
                <input type="text" name="perm2" id="perm2">
            </fieldset>



            <input type="submit" value="Submit">

        </form>
    </body>
</html>