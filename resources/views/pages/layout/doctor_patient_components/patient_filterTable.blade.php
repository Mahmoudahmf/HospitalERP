   <div class="patient-operation">

        <div class="operations">
            <div class="filter-operation">
                <div>
                    <p class="edit-p">Edit Filters</p>

                </div>

                <div>
                    <a href="">clear all filters</a>

                </div>

            </div>

            <div class="types-operations">
                <div class="types">
                    <h3>Type Of Operation</h3>
                    <ul>
                        <li class="checkbox-type">
                        <input type="checkbox" class="checkbox-type type1" onchange="filterByType()"/>
                        <span>Examination</span>
                        </li>
                        <li class="checkbox-type">
                            <input type="checkbox"  class="checkbox-type" />
                            <span>Surgery</span>
                        </li>
                        <li class="checkbox-type">
                            <input type="checkbox"  class="checkbox-type"/>
                            <span>Emergency</span>
                        </li>
                        <li class="checkbox-type">
                            <input type="checkbox"  class="checkbox-type" />
                            <span>Consultation</span>
                        </li>
                        <li class="checkbox-type">
                            <input type="checkbox"  class="checkbox-type"/>
                            <span>Radiology</span>
                        </li>
                        <li class="checkbox-type">
                            <input type="checkbox"  />
                            <span>Medical Anaylsis</span>
                        </li>
                    </ul>
                </div>

                <div class="container-arrow">
                    <div  class="arrow">

                    </div>

                </div>

            </div>

            <div class="data-range-patient">
                <h3>Date Range</h3>
                <div class="date-patient">
                    <p>06/08/2016-9/21/2017</p>
                    <i class="fas fa-calendar-day"></i>
                </div>

            </div>


            <button type="submit" class="button-pause">
                <p>Pause</p>
            </button>



        </div>

        <div class="table-patientPage">
            <div class="header-table-dashboard3">
                <div class="item item--1"><p class="patientData">patient Data</p></div>

                <div class="item item--2">
                    <div class="search">
                        <i class="fas fa-search search-icon"></i>
                        <input class="search-input" type="search" />
                    </div>
                </div>

                <div class="item item--3">
                    <select name="patientName" id="patient-select" class="select patientName">
                        <option value=""><p class="name">Patient Name</p></option>
                        <option value="Fatima"><p class="name">Fatima</p></option>
                        <option value="Asmaa"><p>Fatima</p></option>
                        <option value="Alaa"><p>Fatima</p></option>
                    </select>
                    <select name="nurseName" id="nurse-select" class=" select nurseName">
                        <option value=""> <p>Nurse Name</p></option>
                        <option value="Fatima"><p> Name</p></option>
                        <option value="Asmaa"><p> Name</p></option>
                        <option value="Alaa"><p> Name</p></option>
                    </select>
                    <select name="type" id="type" class="select type" >
                        <option value=""><p>Type</p></option>
                        <option value="male"><p>Surgery</p></option>
                        <option value="female"><p>Examin</p></option>
                        <option value="male"><p>Medical Analysis</p></option>
                        <option value="female"><p>Radiology</p></option>
                    </select>
                    <select name="Status" id="Status" class="select Status" >
                        <option value=""> <p>Status</p></option>
                        <option value="male"><p>  <i class="fas fa-circle"></i>Surgery</p></option>
                        <option value="female"> <i class="fas fa-circle"></i><p>Examin</p></option>
                        <option value="male">  <i class="fas fa-circle"></i><p>Medical Analysis</p></option>
                    </select>
                    <select name="update" id="update" class="select update">
                        <option value=""> <p></p><p></p>Last Updated</option>
                        <option value="male">busy</option>
                        <option value="female">free</option>
                        <option value="female">absent</option>
                    </select>
                </div>


            </div>


            <table class="table-dashboard3">
                <thead class="thead-table-dashboard3">
                    <th>no</th>
                    <th>type</th>
                    <th>patient name</th>
                    <th>date</th>
                    <th>nurse name</th>
                    <th>room no</th>
                    <th>status</th>
                </thead>
                <tbody id="tbody" class="tbody-table-dashboard3">
                    <tr class="row row1-table-dashboard3">
                        <td>1</td>
                        <td>Examination</td>
                        <td class="patient-name">
                           <p> Lance Bogrol</p>
                        </td>
                        <td>26.9.2021</td>
                        <td class="nurse-name">Lance Bogrol</td>
                        <td>1004</td>
                        <td><i class="fas fa-circle examine-type"></i></td>
                    </tr>
                    <tr  class="row row2-table-dashboard3">
                        <td>2</td>
                        <td class="consultation">Consultation</td>
                        <td  class="patient-name">
                            <p> Lance Bogrol</p>
                        </td>
                        <td>26.9.21</td>
                        <td class="nurse-name">Lance Bogrol</td>
                        <td>1004</td>
                        <td><i class="fas fa-circle consultation"></i></td>
                    </tr>
                    <tr  class="row row3-table-dashboard3">
                        <td>3</td>
                        <td>Radiology</td>
                        <td  class="patient-name"><p> Lance Bogrol</p></td>
                        <td>27.9.2021</td>
                        <td class="nurse-name">Lance Bogrol</td>
                        <td>1004</td>
                        <td><i class="fas fa-circle radiology-type"></i></td>
                    </tr>
                    <tr  class="row row4-table-dashboard3">
                        <td>4</td>
                        <td>Emergency</td>
                        <td  class="patient-name"><p> Lance Bogrol</p></td>
                        <td>27.92021</td>
                        <td class="nurse-name">Lance Bogrol</td>
                        <td>1004</td>
                        <td><i class="fas fa-circle emergery-type"></i></td>
                    </tr>
                    <tr  class="row row5-table-dashboard3">
                        <td>5</td>
                        <td>Surgery</td>
                        <td  class="patient-name"><p> Lance Bogrol</p></td>
                        <td>27.9.2021</td>
                        <td class="nurse-name">Lance Bogrol</td>
                        <td>1004</td>
                        <td><i class="fas fa-circle examine-type"></i></td>
                    </tr>
                    <tr  class="row row6-table-dashboard3">
                        <td>6</td>
                        <td>Examination</td>
                        <td  class="patient-name"><p> Lance Bogrol</p></td>
                        <td>28.9.2021</td>
                        <td class="nurse-name">Lance Bogrol</td>
                        <td>1004</td>
                        <td><i class="fas fa-circle surgery-type"></i></td>
                    </tr>
                    <tr  class="row row7-table-dashboard3">
                        <td>7</td>
                        <td class="consultation">Consultation</td>
                        <td  class="patient-name"><p> Lance Bogrol</p></td>
                        <td>28.9.2021</td>
                        <td class="nurse-name">Lance Bogrol</td>
                        <td>1004</td>
                        <td><i class="fas fa-circle consultation"></i></td>
                    </tr>
                    <tr  class="row row8-table-dashboard3">
                        <td>8</td>
                        <td>Surgery</td>
                        <td  class="patient-name"><p> Lance Bogrol</p></td>
                        <td>28.9.2021</td>
                        <td class="nurse-name">Lance Bogrol</td>
                        <td>1004</td>
                        <td><i class="fas fa-circle surgery-type"></i></td>
                    </tr>
                    <tr  class="row row9-table-dashboard3">
                        <td>9</td>
                        <td>Radiology</td>
                        <td  class="patient-name"><p> Lance Bogrol</p></td>
                        <td>28.9.2021</td>
                        <td class="nurse-name">Lance Bogrol</td>
                        <td>1004</td>
                        <td><i class="fas fa-circle examine-type "></i></td>
                    </tr>

                </tbody>
            </table>



        </div>

    </div>



