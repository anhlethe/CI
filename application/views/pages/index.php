<h2><?php echo $title; ?></h2>
<link rel="stylesheet" type="text/css" href="<? echo base_url();?>public/css/base.css">
<link rel="stylesheet" type="text/css" href="<? echo base_url();?>public/css/cake.css">
<!--<?php foreach ($bookmark as $name): ?>

        <h3><?php echo $name['title']; ?></h3>
        <div class="main">
                <?php echo $name['description']; ?>
        </div>
        <p><a href="<?php echo site_url('pages/view/'. $name['user_id']); ?>">View article</a></p>

<?php endforeach; ?>-->
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        
       
    </ul>
</nav>
<div class="bookmarks index large-9 medium-8 columns content">
    <h3>('Bookmarks') </h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Title</th>
                <th class="actions">__('Actions') </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bookmark as $name): ?>
            <tr>
                <?php echo '<td>'.$name['title'] .'</td>';?>
                <td><?php echo $name['description'] ?></td>
                <td><? echo $name['url'] ?></td>
                <td><? echo $name['created'] ?></td>
                <td class="actions">
                    <a href="<?php echo site_url('pages/view/'. $name['user_id']); ?>">View article</a>
                    <a href="<?php echo site_url('pages/view/'. $name['user_id']); ?>">View article</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            
        </ul>
      
    </div>
</div>