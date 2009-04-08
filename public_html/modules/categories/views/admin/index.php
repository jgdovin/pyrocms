<table border="0" class="listTable">
    
  <thead>
	<tr>
		<th class="first"><div></div></th>
		<th><a href="#">Category</a></th>
		<th class="last"><span>Actions</span></th>
	</tr>
  </thead>

    
		<tr>
			<td><input type="checkbox" name="delete[<?= $category->slug;?>]" /></td>
			<td><?=$category->title;?></td>
			<td><?=anchor('admin/categories/edit/' . $category->slug, 'Edit') . ' | ' . 
			anchor('admin/categories/delete/' . $category->slug, 'Delete', array('class'=>'confirm'));?>
			</td>
		</tr>
		<? endforeach; ?>
                      
        	<td colspan="3">There are no categories.</td>
        </tr>
    
    </tbody>
</table>
    
<div class="fcc-table-buttons">
    <a href="<?=site_url('admin/categories/create');?>"><img src="/assets/img/admin/fcc/btn-add.jpg" /></a>
 		<input type="image" name="btnDelete" value="Delete" alt="Delete" src="/assets/img/admin/fcc/btn-delete.jpg" />
 	
</div>

 <?=form_close(); ?>