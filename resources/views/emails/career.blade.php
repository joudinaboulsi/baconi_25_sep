<h3>Email from Baconies's Website</h3>
<p>Fullname: {{ $name }}</p>
<p>Email: {{ $email }}</p>
<p>Phone: {{ $phone }}</p>

<p>Message: <?php $message = preg_replace('/\r\n|\r|\n/','<br/>',$message); echo $message; ?></p>