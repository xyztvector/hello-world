<html>
<head>
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">

<script src="https://kjur.github.io/jsrsasign/jsrsasign-latest-all-min.js"></script>
<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/sha1.js"></script>

<script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/hmac-sha1.js"></script>
<script type="text/javascript" src="http://travistidwell.com/jsencrypt/bin/jsencrypt.js"></script>
<script src="./test.js"></script>
</head>

<body>
<h2>Cipher Matrix</h2>
<select id="SGs">
  <option value="rsa">RSA</option>
  <option value="dh">DH</option>
</select>
<button type="button" id="sG" style="width:140px;" onclick="serverGen()">Server Gen</button>
<button type="button" id="sS" style="width:140px;" onclick="serverSign()">Server Sign</button>
<button type="button" id="sE" style="width:140px;" onclick="serverEncrypt()">Server Encrypt</button><br>

<select id="CGs">
  <option value="rsa">RSA</option>
  <option value="dh">DH</option>
</select>
<button type="button" id="cG" style="width:140px;" onclick="clientGen()">Client  Gen</button>
<button type="button" id="cS" style="width:140px;" onclick="clientSign()">Client  Sign</button>
<button type="button" id="cE" style="width:140px;" onclick="clientEncrypt()">Client  Encrypt--</button><br>

<textarea id="op" rows="1" cols="70">
op
</textarea><br>

<textarea id="privateText" rows="20" cols="70">
private
</textarea> 

<textarea id="publicText" rows="7" cols="70">
public
</textarea> 

<textarea id="certText" rows="12" cols="70">
cert
</textarea> 

</body>
</html>

