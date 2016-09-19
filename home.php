<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php") ?>
</head>
<body>
<div id="wrapper">
    <!--Sidebar-->
    <?php include("php/menu.php") ?>

    <!--Main content-->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row well">
                <div class="col-lg-12">
                    <h1 class="text-primary">To Fix:</h1>
                    <ul>
                        <li><strike>Menu bar does not scroll with page -> Create scrolling menu bar</strike></li>
                        <li><strike>Tournament creation with multiple dates</strike></li>
                        <li><strike>Remove ":" from tourny titles</strike></li>
                        <li><strike>Padding of BL4DE icon on menu bar is fucked up</strike></li>
                        <li>Fixing the fucking control page, so bad...</li>
                        <li>Redo all dirs and incorporate the home dir (~)</li>
                        <li>Comment your code you peasant</li>
                        <li><strike>Map names with two words are not functional</strike></li>
                        <li><strike>Don't delete the tournament pages, move them to 'Old' dir</strike></li>
                        <li><strike>Long tournament names hang over on the next line. Either make the menu bar wider or have the indentation fixed</strike></li>
                        <li>Sort the tournaments by the date they are played not alphabetically</li>
                        <li><strike>Rel Icon on specific tournaments is not routing properly</strike></li>
                    </ul>
                    <h1 class="text-primary">To Future:</h1>
                    <ul>
                        <li><strike>Auto generate page dedicated to a given tourny that linked from the entry under the tournaments</strike></li>
                        <li>Display on that page ^: <br/>
                            - Opponents and their stats, along with their current ranking<br/>
                            - Current ranking? <br/>
                            - Gold grab</li>
                        <li><strike>Page for creating the tournament entries </strike><br/>
                            - MySQL Database? or stick with data files?<br/>
                            - Auto create tournaments with a link from WoT website</li>
                        <li><strike>Show current tournaments on the menu bar?, as a drop down or a static list?</strike></li>
                        <li><strike>Control Panel:</strike><br/>
                            - Access the tournament control, be able to create/delete tournies</li>
                        <li>Create functionality to edit preexisting tournaments</li>
                        <li>Delete tournaments that are 1 day old (past last day of the tournament), and have already ended<br/>
                            - Add a end date for when the tourny is created?</li>
                        <li><strike>What to do with old tournaments?:<br/>
                            - Create dir for old tournaments and store them there?<br/>
                            - Completely remove them?<br/></strike>
                                - Should old tournaments still be visable on the website? Proably shouldn't delete the pages dedicated to them.</li>
                        <li>Possibly combine all the tournament scripts into one, or ya know have over 9000 scripts...</li>
                        <li>Order tournaments on the tourny page by date that they will be played. Soonest being at the top and not soonest being at the not top</li>
                        <li>Create an old page under the tournament section for old tournaments</li>
                        <li>Need to be able to edit previously made tournaments!!!!!!</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>