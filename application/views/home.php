<div class="jumbotron text-center">
    <h1>David's Equipment</h1>
</div>
<div class="row">
    <div class="col-md-4">
        Equipment Sets
        <form id="presetForm" method="post" action="/Welcome/Update">
            <select class="form-control form-control-sm" name="Set">
                <option value="Default">Default</option>
                <option value="Wood">Wood</option>
                <option value="Bronze">Bronze</option>
                <!--
                <optgroup label = "Head">
                    <option value="H1">Bandana</option>
                    <option value="H2">Glasses</option>
                    <option value="H3">War Helmet</option>
                </optgroup>
                !-->
            </select>
            <input id="submitBtn" style="margin-top: 10px" class="btn btn-info" type="submit">
        </form>

        <div style="margin-top:10px" class="progress">
            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100"
                 aria-valuemin="0" aria-valuemax="100" style="width:100%">
                Strength
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75"
                 aria-valuemin="0" aria-valuemax="100" style="width:75%">
                Dexterity
            </div>
        </div>

        <div class="progress">
            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10"
                 aria-valuemin="0" aria-valuemax="100" style="width:20%">
                Intelligence
            </div>
        </div>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-6">
        <div class="well containerdiv" style="height: 400px;">
            <img class="center-block parent" src="/assets/images/{character}" style="width: auto; height: 100%;"/>
            <img id="weapon" class="weapon" src="/assets/images/items/{weapon}"/>
            <img id="helmet" class="helmet" style="width:80%; height:auto" src="/assets/images/items/{helmet}"/>
        </div>
    </div>
</div>