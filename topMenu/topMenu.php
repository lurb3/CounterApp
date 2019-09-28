<div id="topMenuContainer">

    <div class="text-center">

        <div class="d-inline-block float-left">
            <img class="logoMenu" src="images/menu_logo.svg"/>
        </div>

        <div class="menuInputContainer">
            <h3 class="d-inline-block">Categories</h3>
            <select name="categories" id="categories">
                <option id="insertOpt" onclick="insertOpt('categories')">New</option>
            </select>
        </div>

        <div class="menuInputContainer">
            <h3 class="d-inline-block">Subject</h3>
            <select name="subjects" id="subjects" class="d-inline-block">
                <option  onclick="insertOpt('subjects')">New</option>
            </select>
        </div>

        <div class="d-inline-block">
            <span id="countBtn" onclick="startCounting()">
                Start Counting
            </span>
        </div>
        
        <div class="d-inline-block float-right">
            <span id="countSave" onclick="saveCounting()">Save Progress</span>
            <span class="signOut d-inline-block" onclick="showSignOutModal()">Logout</span>
        </div>

    </div>
   
</div>