<?php

require 'loader/autoloader.php';

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'addvisitor':
            $add = new Inser();
            extract($_POST);
            $name = $fname.' '.$lname;
            echo $ersponse = $add->insert('visitors',
           $records = [
                'name' => $name,
                'checkin' => $checkin,
                'checkout' => $checkout,
                'datevisited' => $datevisited,
                'purpose' => $purpose,
                'remarks' => $remarks,
                'phone' => $phone,
                'email' => $email,
                'address1' => $address1,
                'address2' => $address2,
            ]
        );

            break;
        case 'addcustomer':
            $add = new Inser();
            extract($_POST);
            $name = $fname.' '.$lname;
            $ename = $efname.' '.$elname;
            echo $response = $add->insert('customers',
            [
                'name' => $name,
                'gender' => $gender,
                'empstatus' => $empstatus,
                'jobtitle' => $jobtitle,
                'hedu' => $hedu,
                'mstatus' => $mstatus,
                'address' => $address,
                'phone' => $phone,
                'email' => $email,
                'ename' => $ename,
                'erelation' => $erelation,
                'eaddress' => $eaddress,
                'econt1' => $econt1,
                'econt2' => $econt2,
            ]
        );

            break;
        case 'addbookings':
        $add = new Inser();
        extract($_POST);
echo $response = $add->insert(
    'bookings',
    ['cid' => $cid,
    'bookdate' => $bookdate,
    'booktime' => $booktime,
    'toc' => $toc,
    'assigned' => $assigned,
    'hyh' => $hyh,
    'dateadded' => date('jS F, Y'), ]
);
            break;
        case 'addexcuted':
$add = new Inser();
extract($_POST);
echo $response = $add->insert('eventx', [
    'title' => $title,
    'venue' => $venue,
    'rate' => $rate,
    'edate' => $edate,
    'edays' => $edays,
    'males' => $males,
    'females' => $females,
    'total' => $total,
    'speaker' => $speaker,
    'report' => $report,
]
);
 break;
        case 'eventbook':
$add = new Inser();
extract($_POST);
$cpname = $cfname.' '.$clname;

echo $response = $add->insert('eventb',
[
    'institution' => $institution,
'title' => $title,
'address' => $address,
'program' => $program,
'requestdate' => $requestdate,
'implementeddate' => $implementeddate,
'resourceperson' => $resourceperson,
'budget' => $budget,
'remarks' => $remarks,
'cpname' => $cpname,
'cpaddress' => $cpaddress,
'cpcontact' => $cpcontact,
 ]);
        break;

    case 'addstaff':
        $add = new Inser();
        extract($_POST);
        $name = $fname.' '.$lname;
        $ename = $efname.' '.$elname;
        $nokname = $nokfname.' '.$noklname;
        echo $response = $add->insert('staff',
        [
            'name' => $name,
            'email' => $email,
            'contact' => $contact,
            'contact2' => $contact2,
            'ssnt' => $ssnt,
            'dob' => $dob,
            'gender' => $gender,
            'mstatus' => $mstatus,
            'address' => $address,
            'religion' => $religion,
            'disorder' => $disorder,
            'hedu' => $hedu,
            'hinstitute' => $hinstitute,
            'program' => $program,

            'department' => $department,
            'jobtitle' => $jobtitle,
            'datestarted' => $datestarted,
            'cfirmdate' => $cfirmdate,
            'exitdate' => $exitdate,
            'slevel' => $slevel,
            'samount' => $samount,
            'ename' => $ename,
            'erelation' => $erelation,
            'eaddress' => $eaddress,
            'econt1' => $econt1,
            'econt2' => $econt2,
            'nokname' => $nokname,
            'nokrelation' => $nokrelation,
            'nokaddress' => $nokaddress,
            'nokcont1' => $nokcont1,
            'nokcont2' => $nokcont2,
            'bankname' => $bankname,
            'branch' => $branch,
            'accname' => $accname,
            'accnumber' => $accnumber,
            'status' => 'active',
        ], $_FILES
        );
        break;

            case 'addsession':
                $add = new Inser();
                extract($_POST);
                echo $response = $add->insert('sessions',
                [
                    'cid' => $cid,
                    'presissue' => $presissue,
                    'intervgiven' => $intervgiven,
                    'assignment' => $assignment,
                    'remarks' => $remarks,
                    'datenext' => $datenext,
                ], $_FILES);
                break;
            case 'viewreport':
                $rid = $_GET['rid'];

                echo '<html><body>
                <embed src="upload/'.$rid.'" width="100%" height="800">
                </body></html>';
                break;
            case 'delete':
                $del = new Del();
                $sid = $_GET['sid'];
                $table = $_GET['table'];
                extract($_POST);

                echo $response = $del->delete($table, [
                    ['id', '=', $sid],
                ]);

                break;

            case "addadmin" :
                $add = new Inser();
                extract($_POST);
                echo $response = $add->insert('cmd',
                [
                    'name'=> $name,
                    'email' =>$email,
                    'username' =>$username,
                    'password'=> md5($password),
                ],$_FILES
            );
                break;

            case "supperlog":
                $login = new Login();
                extract($_POST);

                if(empty($username) || empty($password)){
                    echo 'All field must be filed';
                }
                else{
                    echo $response = $login->authenticate('cmd',
                [
                    ['username','=',$username],
                    ['password','=',md5($password)]
                ],
                "AND"
                );
                }
                
               
                


                break;

            case 'editadmin':
                $up = new Upd();
                extract($_POST);
                if(empty($_FILES)){
                    echo $response = $up->update('cmd',
                [
                    'name' =>$name,
                    'email'=> $email,
                    'username' =>$username

                ],'id='.$id);
                }
                else{
                    echo $response = $up->update('cmd',
                [
                    'name' =>$name,
                    'email'=> $email,
                    'username' =>$username

                ],'id='.$id,$_FILES);
                }
                break;

            case 'addsalary':
                $dd = new Inser();
                extract($_POST);
                echo $response = $dd->insert('salary',
            [
              'cid' =>$cid,
              'amount'=> $amount,
              'ptype'=> $ptype,
              'month'=> $month,
              'year'=> $year,
              'dateadded'=> $dateadded,  
            ]
            );
            break;


            case 'editvisit':
                // echo 'success';
                $up = new Upd();
                    // echo ext($_POST);
                extract($_POST);
               echo $up->update('visitors',
                [
                    'name'=> $name,
                    'checkin' =>$checkin,
                    'checkout' =>$checkout,
                    'datevisited' =>$datevisited,
                    'purpose' =>$purpose,
                    'remarks'=> $remarks,
                    'phone'=> $phone,
                    'email' =>$email,
                    'address1' =>$address1,
                    'address2' =>$address2


                ],'id='.$id);


                // // $up = new Upd();
                // // extract($_POST);
                // // if(empty($_FILES)){
                // //     echo $response = $up->update('visitors',
                // // [
                // //     'name'=> $name,
                // //     'checkin' =>$checkin,
                // //     'checkout' =>$checkout,
                // //     'datevisited' =>$datevisited,
                // //     'purpose' =>$purpose,
                // //     'remarks'=> $remarks,
                // //     'phone'=> $phone,
                // //     'email' =>$email,
                // //     'address1' =>$address1,
                // //     'address2' =>$address2

                // // ],'id='.$id);
                // // }
                // // else{
                // //     echo $response = $up->update('cmd',
                // // [
                // //     'name'=> $name,
                // //     'checkin' =>$checkin,
                // //     'checkout' =>$checkout,
                // //     'datevisited' =>$datevisited,
                // //     'purpose' =>$purpose,
                // //     'remarks'=> $remarks,
                // //     'phone'=> $phone,
                // //     'email' =>$email,
                // //     'address1' =>$address1,
                // //     'address2' =>$address2

                // // ],'id='.$id,$_FILES);
                // }

                break;
            case 'editcustom':

                $up = new Upd();
                    // echo ext($_POST);
                extract($_POST);
               echo $up->update('customers',
                [
                'name' => $name,
                'gender' => $gender,
                'empstatus' => $empstatus,
                'jobtitle' => $jobtitle,
                'hedu' => $hedu,
                'mstatus' => $mstatus,
                'address' => $address,
                'phone' => $phone,
                'email' => $email,
                'ename' => $ename,
                'erelation' => $erelation,
                'eaddress' => $eaddress,
                'econt1' => $econt1,
                'econt2' => $econt2,


                ],'id='.$id);

                break;
            case 'editbook' :

                $up = new Upd();
                    // echo ext($_POST);
                extract($_POST);
               echo $up->update('bookings',
                [
                    'cid' => $cid,
                    'bookdate' => $bookdate,
                    'booktime' => $booktime,
                    'toc' => $toc,
                    'assigned' => $assigned,
                    'hyh' => $hyh,


                ],'id='.$id);

                break;


            case 'editevbook' :

                    $up = new Upd();
                        // echo ext($_POST);
                    extract($_POST);
                   echo $up->update('eventb',
                    [
                        'institution' => $institution,
                        'title' => $title,
                        'address' => $address,
                        'program' => $program,
                        'requestdate' => $requestdate,
                        'implementeddate' => $implementeddate,
                        'resourceperson' => $resourceperson,
                        'budget' => $budget,
                        'remarks' => $remarks,
                        'cpname' => $cpname,
                        'cpaddress' => $cpaddress,
                        'cpcontact' => $cpcontact,
    
    
                    ],'id='.$id);
    
                    break;


                case 'editevexecute' :

                        $up = new Upd();
                            // echo ext($_POST);
                        extract($_POST);
                       echo $up->update('eventx',
                        [
                            'title' => $title,
                            'venue' => $venue,
                            'rate' => $rate,
                            'edate' => $edate,
                            'edays' => $edays,
                            'males' => $males,
                            'females' => $females,
                            'total' => $total,
                            'speaker' => $speaker,
                            'report' => $report,
        
        
                        ],'id='.$id);
        
                        break;
            case 'editsess' :

                            $up = new Upd();
                                // echo ext($_POST);
                            extract($_POST);
                           if(empty($_FILES)){
                            echo $up->update('sessions',
                            [
                            'cid' => $cid,
                            'presissue' => $presissue,
                            'intervgiven' => $intervgiven,
                            'assignment' => $assignment,
                            'remarks' => $remarks,
                            'datenext' => $datenext,
            
            
                            ],'id='.$id,$_FILES);
                           }
                           else{
                            echo $up->update('sessions',
                            [
                            'cid' => $cid,
                            'presissue' => $presissue,
                            'intervgiven' => $intervgiven,
                            'assignment' => $assignment,
                            'remarks' => $remarks,
                            'datenext' => $datenext,
            
            
                            ],'id='.$id,$_FILES);
                           }
            
                            break;

            case 'editstaff' :

                                $up = new Upd();
                                    // echo ext($_POST);
                                extract($_POST);
                               if(empty($_FILES)){
                                echo $up->update('staff',
                                [
                                    'name' => $name,
                                    'email' => $email,
                                    'contact' => $contact,
                                    'contact2' => $contact2,
                                    'ssnt' => $ssnt,
                                    'dob' => $dob,
                                    'gender' => $gender,
                                    'mstatus' => $mstatus,
                                    'address' => $address,
                                    'religion' => $religion,
                                    'disorder' => $disorder,
                                    'hedu' => $hedu,
                                    'hinstitute' => $hinstitute,
                                    'program' => $program,
                        
                                    'department' => $department,
                                    'jobtitle' => $jobtitle,
                                    'datestarted' => $datestarted,
                                    'cfirmdate' => $cfirmdate,
                                    'exitdate' => $exitdate,
                                    'slevel' => $slevel,
                                    'samount' => $samount,
                                    'ename' => $ename,
                                    'erelation' => $erelation,
                                    'eaddress' => $eaddress,
                                    'econt1' => $econt1,
                                    'econt2' => $econt2,
                                    'nokname' => $nokname,
                                    'nokrelation' => $nokrelation,
                                    'nokaddress' => $nokaddress,
                                    'nokcont1' => $nokcont1,
                                    'nokcont2' => $nokcont2,
                                    'bankname' => $bankname,
                                    'branch' => $branch,
                                    'accname' => $accname,
                                    'accnumber' => $accnumber,
                                    'status' => $status,
                
                
                                ],'id='.$id);
                               }
                               else{
                                echo $up->update('staff',
                                [
                                    'name' => $name,
                                    'email' => $email,
                                    'contact' => $contact,
                                    'contact2' => $contact2,
                                    'ssnt' => $ssnt,
                                    'dob' => $dob,
                                    'gender' => $gender,
                                    'mstatus' => $mstatus,
                                    'address' => $address,
                                    'religion' => $religion,
                                    'disorder' => $disorder,
                                    'hedu' => $hedu,
                                    'hinstitute' => $hinstitute,
                                    'program' => $program,
                        
                                    'department' => $department,
                                    'jobtitle' => $jobtitle,
                                    'datestarted' => $datestarted,
                                    'cfirmdate' => $cfirmdate,
                                    'exitdate' => $exitdate,
                                    'slevel' => $slevel,
                                    'samount' => $samount,
                                    'ename' => $ename,
                                    'erelation' => $erelation,
                                    'eaddress' => $eaddress,
                                    'econt1' => $econt1,
                                    'econt2' => $econt2,
                                    'nokname' => $nokname,
                                    'nokrelation' => $nokrelation,
                                    'nokaddress' => $nokaddress,
                                    'nokcont1' => $nokcont1,
                                    'nokcont2' => $nokcont2,
                                    'bankname' => $bankname,
                                    'branch' => $branch,
                                    'accname' => $accname,
                                    'accnumber' => $accnumber,
                                    'status' => $status,
                
                
                                ],'id='.$id,$_FILES);
                               }
                
              break;
           default:

            break;
    }
}
