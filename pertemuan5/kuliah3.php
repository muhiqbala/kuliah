<?php 

$mahasiswa = [
["Jimmy", "21340050", "jimmy.213040050@mail.ac.id", "Teknik Informatika"], 
["Breach", "12131414", "breach@mail.com", "Teknik Ketidaktahuan"],
["Stev", "49158510", "Stev@mail.com", "Teknik Ketidaktahuan"]
];
?>
<?php foreach($mahasiswa as $mhs)  : ?>
<ul>
    <li >Nama : <?= $mhs[0] ?></li>
    <li >NPM: <?= $mhs[1] ?> </li>
    <li >Email : <?= $mhs[2] ?> </li>
    <li >Jurusan : <?= $mhs[3] ?></li>
</ul>

<?php endforeach ?>