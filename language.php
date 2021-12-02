<?php include "includes/header.html" ?>
<?php include "includes/breadcrumbs.html" ?>

<div class="main-section">
    <div class="left-section">
        <!-- vertical navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="nav nav-tabs flex-column nav-fill w-100">
                <li class="nav-item"><a class="nav-link to-personal">Personal Information</a></li>
                <li class="nav-item"><a class="nav-link active to-language">Language Proficiency</a></li>
                <li class="nav-item"><a class="nav-link to-language-alt">Language Proficiency alt</a></li>
                <li class="nav-item"><a class="nav-link to-academic">Academic Qualification</a></li>
                <li class="nav-item"><a class="nav-link to-experience">Professional Experiences</a></li>
                <li class="nav-item"><a class="nav-link to-expertise">Areas of Expertise</a></li>
                <li class="nav-item"><a class="nav-link to-publications">Research & Publicaiton</a></li>
                <li class="nav-item"><a class="nav-link">Preview & Submit</a></li>
            </ul>
        </nav>
    </div>
    <div class="general-info">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eget orci tincidunt, scelerisque leo a, finibus augue. Vestibulum placerat quis mi sed blandit. Maecenas est nibh, varius vitae tellus vitae, vehicula cursus orci. Sed tristique leo placerat, viverra est id, consectetur elit. Praesent non urna dapibus, faucibus risus eget, euismod libero. Sed ac scelerisque lectus. Vestibulum viverra placerat maximus.
        </p>
    </div>
    <div class="form-container">
        <div class="form-headers text-center">
            <h2>Language Proficiency</h2>
            <!-- TODO make info icon span both lines of text -->
            <p><em><i class="fa fa-info-circle"></i>List as many languages that you can speak <br> Rate your proficiency of the languages from well to fair</em></p>
        </div>

        <!-- added languages -->
        <table class="table table-hover align-middle table-sm">
            <thead>
                <tr>
                    <th>Language</th>
                    <th>Read</th>
                    <th>Write</th>
                    <th>Speak</th>
                    <th>Knowledge Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>English</td>
                    <td>Very Well</td>
                    <td>Well</td>
                    <td>Fair</td>
                    <td>N/A</td>
                    <td>
                        <button class="btn btn-sm btn-outline-dark edit-lang"><i class="fas fa-pen"></i></button>
                        <button class="btn btn-outline-danger btn-sm del-lang"><i class="fas fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <form action="" class="">
            <div class="form-group row justify-content-center">
                <label for="language" class="col-sm-2">Language</label>
                <div class="col-sm-4">
                    <input type="text" name="language" class="form-control" id="">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="readProficiency" class="col-sm-2">Read</label>
                <div class="col-sm-2">
                    <input type="radio" name="readProficiency" id=""><label for="veryWell"> Very Well</label>
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="readProficiency" id=""><label for="well"> Well</label>
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="readProficiency" id=""><label for="fair"> Fair</label>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="writeProficiency" class="col-sm-2">Write</label>
                <div class="col-sm-2">
                    <input type="radio" name="writeProficiency" id=""><label for="veryWell">Very Well</label>
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="writeProficiency" id=""><label for="well">Well</label>
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="writeProficiency" id=""><label for="fair">Fair</label>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="speakProficiency" class="col-sm-2">Speak</label>
                <div class="col-sm-2">
                    <input type="radio" name="speakProficiency" id=""><label for="veryWell">Very Well</label>
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="speakProficiency" id=""><label for="well">Well</label>
                </div>
                <div class="col-sm-2">
                    <input type="radio" name="speakProficiency" id=""><label for="fair">Fair</label>
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="knowledgeType" class="col-sm-3">Knowledge Type</label>
                <div class="col-sm-3">
                    <input type="checkbox" name="workingKnowledge" id=""><label for="workingKnowledge">Working Knowledge</label>
                </div>
                <div class="col-sm-3">
                    <input type="checkbox" name="motherTounge" id=""><label for="motherTounge">Mother Tounge</label>
                </div>
            </div>
            <div class="row">
                <div class="form-group form-btns">
                    <button type="button" class="btn btn-primary btn-lg"><i class="fas fa-plus fa-xs"></i> Add another language</button>
                </div>
                <div class="form-group form-btns">
                    <button type="button" class="btn btn-success btn-lg to-personal"><i class="fas fa-arrow-left fa-xs"></i> Previous section</button>
                    <button type="button" class="btn btn-success btn-lg to-academic">Next section <i class="fas fa-arrow-right fa-xs"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "includes/footer.html" ?>