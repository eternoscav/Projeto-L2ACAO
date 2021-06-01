<?
echo "<strong>Copie o conteúdo abaixo para o arquivo aio.txt, se esse arquivo não existir, então crie-o.</strong><br><hr>";
$fi = file("aio.txt");
?>
<textarea name="query" cols="100" rows="8">
<?
foreach($fi as $f) {

echo "".$f."";

}
?>
</textarea>
