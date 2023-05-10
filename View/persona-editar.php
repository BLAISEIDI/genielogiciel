<h1 class="page-header">
    <?php echo $alm->id != null ? $alm->nombres : 'Nouveau Enregistrement'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=Persona">Personnes</a></li>
  <li class="active"><?php echo $alm->id != null ? $alm->nombres : 'Enregistrer une Personne'; ?></li>
</ol>

<form action="?c=Persona&a=Guardar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idpersona" value="<?php echo $alm->idpersona; ?>" />
    
    <div class="form-group">
        <label>Age</label>
        <input type="text" name="Nombres" value="<?php echo $alm->nombres; ?>" class="form-control" placeholder="Entrer votre age" data-validacion-tipo="requerido|min:3" />
    </div>
    
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="Cedula" value="<?php echo $alm->cedula; ?>" class="form-control" placeholder="Entrer votre Nom" data-validacion-tipo="requerido|min:7" />
    </div>
    
    <div class="form-group">
        <label>date de naissance</label>
        <input type="date" name="FechaNacimiento" value="<?php echo $alm->fecha_nmto; ?>" class="form-control" placeholder="donner votre Date de naissance" data-validacion-tipo="requerido|date" />
    </div>
    
    <div class="form-group">
        <label>Postnom</label>
        <input type="text" name="direccion" value="<?php echo $alm->direccion; ?>" class="form-control" placeholder="entrer votre Postnom" data-validacion-tipo="requerido|min:8" />
    </div>
    
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="correo" value="<?php echo $alm->email; ?>" class="form-control" placeholder="Entrer votre mail" data-validacion-tipo="requerido|email" />
    </div>
    
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Enregistrer</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-alumno").submit(function(){
            return $(this).validate();
        });
    })
</script>
