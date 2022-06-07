$kgjdhfhwywhfhdjfh = \XF::finder('XFRM:ResourceVersion')->where('resource_version_id', $attachment->content_id)->fetchOne();
$GResource = $kgjdhfhwywhfhdjfh->Resource['resource_id'];
$GMember = $kgjdhfhwywhfhdjfh->TeamUser['user_id'];
$LMember = \XF::visitor()->user_id;

$f = "######################################################################" . PHP_EOL;
$f .= "# ©LIGHTLEAK" . PHP_EOL;
$f .= "#" . PHP_EOL;
$f .= "#" . PHP_EOL;
$f .= "#                           «LIGHTLEAK»" . PHP_EOL;
$f .= "#                              ©2022" . PHP_EOL;
$f .= "#                       Только безопасные сливы" . PHP_EOL;
$f .= "#" . PHP_EOL;
$f .= "# • Автор поста: https://lightleak.xyz/members/" . $GMember . "/" . PHP_EOL;
$f .= "# • Ресурс: https://lightleak.xyz/resources/" . $GResource . "/" . PHP_EOL;
$f .= "# • Пользователь: https://lightleak.xyz/members/" . $LMember . "/" . PHP_EOL;
$f .= "# • Website: https://lightleak.xyz" . PHP_EOL;
$f .= "# • Discord: https://discord.gg/yHjcW9728e" . PHP_EOL;
$f .= "#" . PHP_EOL;
$f .= "#" . PHP_EOL;
$f .= "#                                                          ©LIGHTLEAK " . PHP_EOL;
$f .= "######################################################################" . PHP_EOL;
$f .= '';
$p = File::copyStreamToTempFile(XF::fs()->readStream($attachment->Data->getAbstractedDataPath()));
$file = new ZipArchive();
$res = $file->open($p);
if ($res === true)
{
    $file->setArchiveComment($f);
    $file->close();
}