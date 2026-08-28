<?php
$pageTitle = 'Kanban';
$pageDescription = 'Board tugas bergaya Sneat untuk alur kerja admin.';
?>
<?php include __DIR__ . '/layouts/app-start.php'; ?>
<section class="sneat-page app-kanban-page">
  <div class="kanban-board">
    <div class="kanban-column"><div class="kanban-title">To Do <span class="badge badge-soft-primary">3</span></div><div class="kanban-card"><h6>Prepare lesson assets</h6><p>Collect images and slides for academy module.</p><span class="badge badge-soft-warning">Design</span></div><div class="kanban-card"><h6>Audit student data</h6><p>Review incomplete attendance profiles.</p><span class="badge badge-soft-info">Admin</span></div></div>
    <div class="kanban-column"><div class="kanban-title">In Progress <span class="badge badge-soft-primary">2</span></div><div class="kanban-card"><h6>Dashboard UI polish</h6><p>Adapt cards, spacing, and menus from Sneat.</p><span class="badge badge-soft-success">UI</span></div><div class="kanban-card"><h6>Calendar sync</h6><p>Prepare static event layout preview.</p><span class="badge badge-soft-info">App</span></div></div>
    <div class="kanban-column"><div class="kanban-title">Done <span class="badge badge-soft-primary">2</span></div><div class="kanban-card"><h6>Email page</h6><p>Inbox, messages, and preview panel.</p><span class="badge badge-soft-success">Ready</span></div><div class="kanban-card"><h6>Support center</h6><p>Ticket and article layout.</p><span class="badge badge-soft-success">Ready</span></div></div>
  </div>
</section>
<?php include __DIR__ . '/layouts/app-end.php'; ?>
