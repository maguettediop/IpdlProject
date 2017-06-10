@extends('layouts.appHome')

@section('content')
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Demande d'Acte de Naissance
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Formulaire
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <form>
        <h1>Should you have any questions, please do not hesitate to contact me :</h1>
        
        <div class="contentform">
            <div id="sendmessage"> Your message has been sent successfully. Thank you. </div>


            <div class="leftcontact">
              <div class="form-group">
                  <p>Nom<span>*</span></p>
                  <span class="icon-case"><i class="fa fa-male"></i></span>
                  <input type="text" name="nom" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
                  <div class="validation"></div>
              </div> 

              <div class="form-group">
                <p>Prenom <span>*</span></p>
                <span class="icon-case"><i class="fa fa-user"></i></span>
                <input type="text" name="prenom" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
                <div class="validation"></div>
            </div>

            <div class="input-append date form_datetime">
                <input size="16" type="text" value="" readonly>
                <span class="add-on"><i class="icon-th"></i></span>
            </div>
            
            <script type="text/javascript">
                $(".form_datetime").datetimepicker({
                    format: "dd MM yyyy - hh:ii"
                });
            </script>            


            <div class="form-group">
                <p>Company <span>*</span></p>
                <span class="icon-case"><i class="fa fa-home"></i></span>
                <input type="text" name="society" id="society" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Société' doit être renseigné."/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Company Address <span>*</span></p>
                <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
                <input type="text" name="adresse" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Postcode <span>*</span></p>
                <span class="icon-case"><i class="fa fa-map-marker"></i></span>
                <input type="text" name="postal" id="postal" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
                <div class="validation"></div>
            </div>  



        </div>

        <div class="rightcontact">  

            <div class="form-group">
                <p>City <span>*</span></p>
                <span class="icon-case"><i class="fa fa-building-o"></i></span>
                <input type="text" name="ville" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
                <div class="validation"></div>
            </div>  

            <div class="form-group">
                <p>Phone number <span>*</span></p>  
                <span class="icon-case"><i class="fa fa-phone"></i></span>
                <input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Function <span>*</span></p>
                <span class="icon-case"><i class="fa fa-info"></i></span>
                <input type="text" name="fonction" id="fonction" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Fonction' doit être renseigné."/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Subject <span>*</span></p>   
                <span class="icon-case"><i class="fa fa-comment-o"></i></span>
                <input type="text" name="sujet" id="sujet" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."/>
                <div class="validation"></div>
            </div>

            <div class="form-group">
                <p>Message <span>*</span></p>
                <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                <textarea name="message" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
                <div class="validation"></div>
            </div>  
        </div>
    </div>
    <button type="submit" class="bouton-contact">Send</button>
    
</form> 
</div>

@endsection
