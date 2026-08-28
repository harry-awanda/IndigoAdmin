<?php
$pageTitle = 'Chat';
$pageDescription = 'Percakapan tim dengan daftar kontak dan ruang pesan.';
?>
<?php include __DIR__ . '/layouts/app-start.php'; ?>
<section class="sneat-page app-chat-page">
  <div class="app-shell chat-shell">
    <aside class="app-panel side-panel">
      <div class="topbar-search mb-3"><i class="bi bi-search"></i><input type="text" placeholder="Search contacts"></div>
      <a class="chat-contact active" href="chat.php"><div class="avatar">F</div><div><strong>Felecia</strong><span>Course coordinator</span></div></a>
      <a class="chat-contact" href="chat.php"><div class="avatar avatar-success">M</div><div><strong>Maven</strong><span>Instructor</span></div></a>
      <a class="chat-contact" href="chat.php"><div class="avatar avatar-warning">B</div><div><strong>Bentlee</strong><span>Marketing</span></div></a>
    </aside>

    <article class="app-panel chat-panel">
      <div class="content-panel-header"><div class="d-flex align-items-center gap-3"><div class="avatar">F</div><div><h5>Felecia</h5><p>Online</p></div></div><button class="btn btn-light btn-icon"><i class="bi bi-telephone"></i></button></div>
      <div class="chat-messages">
        <div class="chat-bubble incoming">Can we review the academy dashboard cards today?</div>
        <div class="chat-bubble outgoing">Sure. I already prepared the progress and instructor sections.</div>
        <div class="chat-bubble incoming">Great, please include the webinar summary too.</div>
      </div>
      <div class="chat-compose"><input class="form-control" type="text" placeholder="Type your message"><button class="btn btn-primary btn-icon"><i class="bi bi-send"></i></button></div>
    </article>
  </div>
</section>
<?php include __DIR__ . '/layouts/app-end.php'; ?>
