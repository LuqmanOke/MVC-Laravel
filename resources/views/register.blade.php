<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>

<h1>Register Sanbercode</h1>
    <h3>Sign Up Form</h3>
    <form method="post" action="home">
        @csrf
    <table>
    	<tr>
    	    <td valign="top"><br>First name <br> <input type="text" name="nama" placeholder="Masukan nama anda"><br></td>
    	</tr>
    	<tr>
    	    <td valign="top"><br>Last name<br><input type="text" name="username" placeholder="Masukan username"><br></td>
    	</tr>
    	<tr>
    	    <td valign="top"><br>Gender<br>
    	    	<input type="radio" name="jk">Male<br />
                <input type="radio" name="jk">Female<br />
    	    	<input type="radio" name="jk">Other<br />
    	    </td>
    	</tr>
    	<tr>
            <td valign="top"><br>Nationality<br>
                
    	        <select>
    	    <option>Indonesian</option>
		    <option>Malaysia</option>
		    <option>Singapura</option>
		    <option>Thailand</option>
		    <option>Philipina</option>
		    <option>Vietnam</option>

    	        </select><br>
    	    </td>
        </tr>
        <tr>
    	    <td valign="top"><br>Language Spoken<br>
    	    	<input type="checkbox" name="l">Bahasa Indonesia<br />
                <input type="checkbox" name="p">English<br />
                <input type="checkbox" name="p">Other<br />
    	    </td>
    	</tr>
    	<tr>
    	    <td valign="top"><br>Biografi<br><textarea placeholder="isilah biografi singkat anda" cols="30" rows="5"></textarea><br></td>
    	</tr>
    	<tr>
    	    <td colspan="2"><br><input type="submit" value="Simpan"><br></td>
    	</tr>
    </table>
    </form>
</body>
</html>