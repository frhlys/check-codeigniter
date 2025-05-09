<form method="post" action="<?= site_url('admin/about/save') ?>">
    <input type="text" name="name" placeholder="Your Name" value="<?= $about->name ?? '' ?>">
    <textarea name="bio"><?= $about->bio ?? '' ?></textarea>
    <button type="submit">Save</button>
</form>
