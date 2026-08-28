<?php
$pageTitle = 'Email';
$pageDescription = 'Inbox admin dengan sidebar folder, daftar pesan, dan panel preview.';
?>
<?php include __DIR__ . '/layouts/app-start.php'; ?>
<section class="sneat-page app-email-page">
  <div class="app-shell three-pane">
    <aside class="app-panel side-panel">
      <button class="btn btn-primary w-100 mb-3"><i class="bi bi-pencil-square me-1"></i>Compose</button>
      <a class="app-nav-item active" href="email.php"><i class="bi bi-inbox"></i><span>Inbox</span><span class="badge badge-soft-primary ms-auto">8</span></a>
      <a class="app-nav-item" href="email.php"><i class="bi bi-send"></i><span>Sent</span></a>
      <a class="app-nav-item" href="email.php"><i class="bi bi-star"></i><span>Starred</span></a>
      <a class="app-nav-item" href="email.php"><i class="bi bi-trash"></i><span>Trash</span></a>
    </aside>

    <div class="app-panel list-panel">
      <div class="app-toolbar"><div class="topbar-search w-100"><i class="bi bi-search"></i><input type="text" placeholder="Search mail"></div></div>
      <div class="message-list">
        <a class="message-item active" href="email.php"><div class="avatar">L</div><div><strong>Lettie Brown</strong><p>Congratulations on your academy milestone.</p></div><span>1h</span></a>
        <a class="message-item" href="email.php"><div class="avatar avatar-success">M</div><div><strong>Maven Analytics</strong><p>Weekly learning progress report is ready.</p></div><span>4h</span></a>
        <a class="message-item" href="email.php"><div class="avatar avatar-warning">S</div><div><strong>Support Desk</strong><p>Your ticket has been assigned.</p></div><span>1d</span></a>
      </div>
    </div>

    <article class="app-panel content-panel">
      <div class="content-panel-header"><div><h5>Congratulations on your academy milestone</h5><p>Lettie Brown &lt;lettie@example.com&gt;</p></div><span class="badge badge-soft-success">New</span></div>
      <p class="text-app-secondary">Your progress this week is awesome. Keep it up and collect more reward points from completed lessons.</p>
      <div class="reply-box"><textarea class="form-control" rows="5" placeholder="Write a reply..."></textarea><button class="btn btn-primary mt-3">Send Reply</button></div>
    </article>
  </div>
</section>
<?php include __DIR__ . '/layouts/app-end.php'; ?>
