  @section('table')




    <div class="table-roomPage">
        <div class="header-table-dashboard2">
            <div class="item item--1"><p class="RoomData">Room Data</p></div>

            <div class="item item--2">
                <div class="search">
                    <i class="fas fa-search search-icon"></i>
                    <input class="search-input" type="search"  />

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


        <table class="table-dashboard2">
            <thead class="thead-table-dashboard2">
                <th>no</th>
                <th>type</th>
                <th>patient name</th>
                <th>duration</th>
                <th>nurse name</th>
                <th>room no</th>
                <th>floor no</th>
                <th>status</th>
            </thead>
            <tbody id="tbody" class="tbody-table-dashboard2">
                <tr class="row row1-table-dashboard2">
                    <td>1</td>
                    <td class="type">Surgery</td>
                    <td class="patient-name">
                        <p> Lance Bogrol</p>
                     </td>
                    <td>2 Days</td>
                    <td>Lance Bogrol</td>
                    <td>1004</td>
                    <td>2</td>
                    <td><i class="fas fa-circle examine-status"></i></td>
                </tr>
                <tr  class="row row2-table-dashboard2">
                    <td>2</td>
                    <td class="type">Examine</td>
                    <td class="patient-name">
                        <p> Lance Bogrol</p>
                     </td>
                    <td>3 Days</td>
                    <td class="nurse-name">Lance Bogrol</td>
                    <td>1004</td>
                    <td>3</td>
                    <td><i class="fas fa-circle surgery-status"></i></td>
                </tr>
                <tr  class="row row3-table-dashboard2">
                    <td>3</td>
                    <td class="type">Surgery</td>
                    <td class="patient-name">
                        <p> Lance Bogrol</p>
                    </td>
                    <td>15 min</td>
                    <td class="nurse-name">Lance Bogrol</td>
                    <td>1004</td>
                    <td>4</td>
                    <td><i class="fas fa-circle urgent-status"></i></td>
                </tr>
                <tr  class="row row4-table-dashboard2">
                    <td>4</td>
                    <td class="type">Medical Analysis</td>
                    <td class="patient-name">
                        <p> Lance Bogrol</p>
                    </td>
                    <td>1 Day</td>
                    <td class="nurse-name">Lance Bogrol</td>
                    <td>1004</td>
                    <td>5</td>
                    <td><i class="fas fa-circle urgent-status"></i></td>
                </tr>
                <tr  class="row row5-table-dashboard2">
                    <td>5</td>
                    <td class="type">Radiology</td>
                    <td class="patient-name">
                        <p> Lance Bogrol</p>
                     </td>
                    <td>15 min</td>
                    <td class="nurse-name">Lance Bogrol</td>
                    <td>1004</td>
                    <td>6</td>
                    <td><i class="fas fa-circle examine-status"></i></td>
                </tr>
                <tr  class="row row6-table-dashboard2">
                    <td>6</td>
                    <td class="type">Examine</td>
                    <td class="patient-name">
                        <p> Lance Bogrol</p>
                    </td>
                    <td>1 Week</td>
                    <td class="nurse-name">Lance Bogrol</td>
                    <td>1004</td>
                    <td>2</td>
                    <td><i class="fas fa-circle surgery-status"></i></td>
                </tr>
                <tr  class="row row7-table-dashboard2">
                    <td>1</td>
                    <td class="type">Surgery</td>
                    <td class="patient-name">
                        <p> Lance Bogrol</p>
                     </td>
                    <td>2 Days</td>
                    <td class="nurse-name">Lance Bogrol</td>
                    <td>1004</td>
                    <td>2</td>
                    <td><i class="fas fa-circle examine-status"></i></td>
                </tr>
                <tr  class="row row8-table-dashboard2">
                    <td>2</td>
                    <td class="type">Examine</td>
                    <td class="patient-name">
                        <p> Lance Bogrol</p>
                     </td>
                    <td>3 Days</td>
                    <td class="nurse-name">Lance Bogrol</td>
                    <td>1004</td>
                    <td>2</td>
                    <td><i class="fas fa-circle examine-status"></i></td>
                </tr>
                <tr  class="row row9-table-dashboard2">
                    <td>3</td>
                    <td class="type">Surgery</td>
                    <td class="patient-name">
                        <p> Lance Bogrol</p>
                     </td>
                    <td>15 min</td>
                    <td class="nurse-name">Lance Bogrol</td>
                    <td>1004</td>
                    <td>2</td>
                    <td><i class="fas fa-circle examine-status"></i></td>
                </tr>

            </tbody>
        </table>
     </div>












@show






