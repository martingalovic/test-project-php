<? foreach ($users as $user) { ?>
    <tr>
        <td><?= $user->getName() ?></td>
        <td><a href="mailto:<?= $user->getEmail() ?>" title="Send e-mail to <?= $user->getEmail() ?>"><code><?= $user->getEmail() ?></code></a></td>
        <td><?= $user->getCity() ?></td>
        <td><a href="tel:<?= $user->getPhone() ?>" title="Call <?= $user->getPhone() ?>"><?= $user->getPhone() ?></td>
    </tr>
<? } ?>