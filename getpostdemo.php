<html>
    <body>
        <h1>Form Demo</h1>
        <form action="process.php" method="post">
            <table>
                <tr>
                    <td>Name:</td>
                    <td> <input type="text" name="txt1" required/></td>
                </tr>
                <tr>
                    <td>Age:</td>
                    <td> <input type="number" name="txt2" min="1" max="80" required/></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td> <input type="email" name="txt3" required></td>
                </tr>
                <tr>
                    <td><input type="submit"/></td>
                    <td><input type="reset"/></td>
                </tr>
            </table>
        </form>         
       

    </body>
</html>
