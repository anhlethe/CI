<?php $this->load->helper('html');?>
<?php echo link_tag('public/css/base.css');?>
<?php echo link_tag('pucblic/css/cake.css');?>
<h2><?php echo $title; ?></h2>
 <table cellpadding="0" cellspacing="0">
    <thead>
            <tr>
                <th>id</th>
                <th>user_id</th>
                <th>title</th>
                <th>created</th>
                <th>modified</th>
            </tr>
    </thead>
     <tbody>
    	<?php foreach ($bookmark as $bookmarks): ?>
       <tr>
             <td><h3><?php echo $bookmarks['title']; ?></h3> </td>
            
    	       <td><?php echo $bookmarks['description']; ?></td>
    	       <td><?php echo $bookmarks['created']; ?></td>
               <td><?php echo $bookmarks['modified']; ?></td>
    	       <td class="actions">
                    <p><a href="<?php echo site_url('bookmarks/'.$bookmarks['id']); ?>">View article</a></p>
                </td>

        <?php endforeach; ?>
    </tbody>
 </table>   




