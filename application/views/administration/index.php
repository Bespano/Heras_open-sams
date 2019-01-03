<!-- Fixed navbar -->

<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h1>Administración</h1>
    <p>Asistencia Social</p>
  </div>
 
  <div class="row">
    <div class="col-md-5">
      <div class="page-header">
        <h2>Categorías</h2>
      </div>
      <div class="row">
        <div class="pull-right">
             <a href="administration/insert_category"><button type="button" class="btn btn-primary">Nueva categoría</button></a>
        </div>
      
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Categoría</th>
             <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
		
    	<?php foreach ($category as $category_item): ?>
				
	        <tr>
	            <td><?php echo $category_item['idCategory']; ?></td>
	            <td><?php echo $category_item['Category']; ?></td>

	            <td>  	   

           
            <?php /*Edit button*/ echo anchor('category/edit_category/'.$category_item['idCategory'], '<button type="button" class="btn btn-warning">Editar</button>');?>
           
            <?php /*Delete button*/ $onclick = array('onclick'=>"return confirm('Confirmar borrado de la actividad nº ".$category_item['idCategory']." ?')");?> <?=anchor('category/delete/'.$category_item['idCategory'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
				</td>

	        </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
      </div>
    </div> <!-- class="col-nav 6" -->

    <div class="col-md-5 pull-right">
      <div class="page-header">
        <h2>Subcategorías</h2>
      </div>
      <div class="row">
        <div class="pull-right">
             <a href="administration/insert_subcategory"><button type="button" class="btn btn-primary">Nueva subcategoría</button></a>
        </div>
      
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Nº</th>
            <th>Subcategoría</th>
             <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
    
      <?php foreach ($subcategory as $subcategory_item): ?>
        
          <tr>
              <td><?php echo $subcategory_item['idSubcategory']; ?></td>
              <td><?php echo $subcategory_item['subcategory']; ?></td>

              <td>       

           
            <?php /*Edit button*/ echo anchor('administration/edit_subcategory/'.$subcategory_item['idSubcategory'], '<button type="button" class="btn btn-warning">Editar</button>');?>
           
            <?php /*Delete button*/ $onclick = array('onclick'=>"return confirm('Confirmar borrado de la actividad nº ".$subcategory_item['idSubcategory']." ?')");?> <?=anchor('subcategory/delete/'.$subcategory_item['idSubcategory'], '<button type="button" class="btn btn-danger">Borrar</button>', $onclick);?>
        </td>

          </tr>
        <?php endforeach; ?>

        

        </tbody>
      </table>
      </div>
    </div> <!-- class="col-nav 6" -->


    
</div>



</div> <!-- /container -->