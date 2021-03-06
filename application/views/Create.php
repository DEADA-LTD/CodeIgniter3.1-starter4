<div class="jumbotron text-center">
    <h1>David's Equipment</h1>
</div>
<div class="row">
    <div class="col-md-4">
        <!-- Preset form -->
        
        <form id="createSet" method="post" action="/Create/Submit">
            Head:
            <select class="form-control form-control-sm" name="Head" onchange="displayEquip()">
                {Head}
            </select>
            Weapon:
            <select class="form-control form-control-sm" name="Weapon" onchange="displayEquip()">
                {Weapon}
            </select>
            Robe:
            <select class="form-control form-control-sm" name="Robe" onchange="displayEquip()">
                {Robe}
            </select>
            Socks:
            <select class="form-control form-control-sm" name="Socks" onchange="displayEquip()">
                {Socks}
            </select>
            Gloves:
            <select class="form-control form-control-sm" name="Gloves" onchange="displayEquip()">
                {Gloves}
            </select>
            Name: <input name="Name" type="text" style="margin-top: 10px; margin-bottom: 10px" class="form-control">
            <p id="errmsg" style="display: none; color:red;">Please enter a valid name</p>
            <input id="submitBtn1" style="margin-top: 10px; margin-bottom: 10px" class="btn btn-info" type="submit">
        </form>
        <!-- Strength bar -->
        Strength
        <div class="progress">
            <div id="str" class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0"
                 aria-valuemin="0" aria-valuemax="100" style="width:0%">
            </div>
        </div>

        <!-- Dexterity bar -->
        Dexterity
        <div class="progress">
            <div id="dex" class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0"
                 aria-valuemin="0" aria-valuemax="100" style="width:0%">
            </div>
        </div>
        
        <!-- Intelligence bar -->
        Intelligence
        <div class="progress">

            <div id="int" class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0"
                 aria-valuemin="0" aria-valuemax="100" style="width:0%">
            </div>
        </div>
    </div>
    <div class="col-md-2">
    </div>
    <div class="col-md-6">
        <div class="well containerdiv" style="height: 400px;">
            <!-- Images here -->
            <img class="center-block parent" src="/assets/images/{character}" style="width: auto; height: 100%;"/>
            <img id="weapon" src="/assets/images/items/blank.png"/>
            <img id="helmet" style="width:100px; height:auto" src="/assets/images/items/blank.png"/>
            <img id="robe"  style="width:100px; height:200px" src="/assets/images/items/blank.png"/>
            <img id="socks" src="/assets/images/items/blank.png"/>
            <img id="socks2" src="/assets/images/items/blank.png"/>
            <img id="gloves" src="/assets/images/items/blank.png"/>
        </div>
    </div>
</div>