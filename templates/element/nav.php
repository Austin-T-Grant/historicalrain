<nav class="top-nav">
    <div class="top-nav-title">
        <a href="<?= $this->Url->build('/') ?>"><span>Historical</span>Rain</a>
        <?php if($username){echo 'Welcome '.$username;} ?>
    </div>
    <div class="top-nav-links">
        <a href=<?= $this->Url->build(['controller'=>'regions', 'action'=>'index']); ?>>View</a>
        <a href=<?= $this->Url->build(['controller'=>'regions', 'action'=>'add']); ?>>Add</a>
        <?php if(!$username): ?>
            <a href=<?= $this->Url->build(['controller'=>'users', 'action'=>'login']); ?>>Login</a>
            <a href=<?= $this->Url->build(['controller'=>'users', 'action'=>'register']); ?>>Register</a>
        <?php endif; ?>
        <?php if($username):?>
            <a href=<?= $this->Url->build(['controller'=>'users', 'action'=>'logout']); ?>>Logout</a>
        <?php endif; ?>
    </div>
</nav>