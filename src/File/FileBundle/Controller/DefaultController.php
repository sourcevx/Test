<?php

namespace File\FileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use File\FileBundle\Models\Document;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \DOMDocument;
use \DOMXPath;
use File\FileBundle\Entity\Bgyrjbusers;




/**
 * upload controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller {

         /**
     * Lists all Rubrica entities.
     *
     * @Route("/file_file_homepage", name="file_file_homepage")
     */
    
    public function indexAction(Request $request) {


       
        if ($request->getMethod() == 'POST') {
            $file = $request->files->get('img');

            $valid_filetypes = array('jpg', 'png', 'gif');
            
            if ($file instanceof UploadedFile) {
                
                if($file->getError()=='0'){

                $originalName = explode('.', $file->getClientOriginalName());
                print_r(' Size : '.$file->getSize());
          
                
                if (!($file->getSize() < 2000000)) {
                    print_r('Size Exceeds Limit');
                    die();
                }

                if (!(in_array(strtolower($originalName[sizeof($originalName) - 1]), $valid_filetypes))) {
                    print_r('Invalid File Type');
                    die();
                }
            }
            else{
                print_r('Upload Error Check File Size and Type');
                die();
            }
            }
            else{
                print_r('Upload Error');
                die();
            }
           
            $document = new Document();
            $document->setFile($file);
            $document->setSubDirectory('myuploads');
            $document->processFile();
            $uploadedURL = $document->getUploadDirectory() . DIRECTORY_SEPARATOR . $document->getSubDirectory() . DIRECTORY_SEPARATOR . $file->getBasename();

            return $this->render('FileFileBundle:Default:index.html.twig', array('name' => '$name', 'uploadedURL' => $uploadedURL));
        } else {
            return $this->render('FileFileBundle:Default:index.html.twig', array('name' => '$name'));
        }
    }

    public function crawlerAction() {
        print_r('Disabled run in Action');
        die();
        $mainURL = 'http://www.bagyourjob.com';

        $userURL = 'http://www.bagyourjob.com/users?search&page=';
        $no_of_pages = '48';

        $htmlDOM = new DOMDocument();
        $em = $this->getDoctrine()->getEntityManager();
        $urls = NULL;
        for ($i = 1; $i <= $no_of_pages; $i++) {
            print_r($i);
            ini_set('max_execution_time', 1000);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $userURL . $i);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            $html_output = curl_exec($ch);
            libxml_use_internal_errors(true);
            $htmlDOM->loadHTML($html_output);
            $x = new DOMXPath($htmlDOM);
            foreach ($x->query("//a") as $node) {
                $url = $node->getAttribute("href");
                if (preg_match('#/user/#', $url)) {
                    $urls[$i][] = $node->getAttribute("href");
                }
            }
            /**
     * Lists all Rubrica entities.
     *
     * @Route("/file_file_homepage", name="file_file_homepage")
     */     foreach ($urls[$i] as $url) {
                $userURLRow = new Bgyrjbusers();
                $userURLRow->setUrl($mainURL . $url);
                $em->persist($userURLRow);
                $em->flush();
            }
        }
        die();
    }

    
  
    
    public function crawlerUserAction() {

        $htmlDOM = new DOMDocument();
        $em = $this->getDoctrine()->getEntityManager();
        $urlRepository = $em->getRepository('FileFileBundle:Bgyrjbusers');
        $userPages = $urlRepository->findBy(array('email' => NULL));

        foreach ($userPages as $userPage) {
            $userPageURL = $userPage->getUrl();
            //print_r('Count Left :'.count($userPages).' Next URL :'.$userPageURL);die();
            ini_set('max_execution_time', 1000);
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $userPageURL);
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 15);
            $html_output = curl_exec($ch);
            libxml_use_internal_errors(true);
            $htmlDOM->loadHTML($html_output);
            $x = new DOMXPath($htmlDOM);
            $phone = '';
            $email = '';
            $nameVal = '';
            $addressVal = '';
            foreach ($x->query("//div[@class='contact']") as $node) {
                $contact = $node->textContent;
                $contactArray = strip_tags(trim($contact));
                $parts = preg_split('/\s+/', $contactArray);
                if (count($parts) >= 2) {
                    $phone = $parts[0];
                    $email = $parts[1];
                } else if (count($parts) == 1) {
                    $email = $parts[0];
                }
            }
            foreach ($x->query("//div[@class='name']") as $node) {
                $name = $node->textContent;
                $nameVal = strip_tags(trim($name));
            }
            foreach ($x->query("//div[@class='address']") as $node) {
                $address = $node->textContent;
                $addressVal .= strip_tags(trim($address));
            }
            $userPage->setName($nameVal);
            $userPage->setEmail($email);
            $userPage->setPhone($phone);
            $userPage->setAddress($addressVal);
            $em->flush();
            unset($userPage);
            unset($html_output);
            unset($ch);
            unset($html_output);
        }
        print_r('Done');
        die();
    }

 
    public function exportUsersAction() {
        $em = $this->getDoctrine()->getEntityManager();

        $query = $em->createQueryBuilder()
                ->select('u.name', 'u.email', 'u.phone', 'u.url')
                ->from('FileFileBundle:Bgyrjbusers', 'u')
                ->where('u.email IS NOT NULL');


        $result = $query->getQuery()->getArrayResult();
        ini_set('max_execution_time', 5000);
        $head = 'u.name,u.email,u.phone,u.url' . "\n";
        $response = $this->generateCSV($result, 4, $head);
        return $response;
    }

    public static function generateCSV($arrayInput, $countRow, $head) {
        $csvString = "";

        foreach ($arrayInput as $row) {
            foreach ($row as $item) {
                if (!($item instanceof DateTime)) {
                    $csvString.= $item . ",";
                } else {
                    $result = $item->format('Y-m-d H:i:s');
                    $csvString.= $result . ",";
                }
            }
        }
        $count = 0;
        $tempArray = "";
        for ($i = 0; $i < strlen($csvString); $i++) {
            if ($csvString[$i] == ',') {
                $count++;
                if ($count == ($countRow)) {
                    $tempArray.="\n";
                    $count = 0;
                } else {
                    $tempArray.=$csvString[$i];
                }
            } else {
                $tempArray.=$csvString[$i];
            }
        }

        $csvResponse = $head;
        $csvResponse.=$tempArray;
        $response = new Response();
        $response->headers->set('Content-Type', "text/csv");
        $response->headers->set('Content-Disposition', 'attachment; filename="test.csv"');
        $response->headers->set('Pragma', "no-cache");
        $response->headers->set('Expires', "0");
        $response->headers->set('Content-Transfer-Encoding', "binary");
        $response->headers->set('Content-Length', strlen($csvResponse));
        $response->setContent($csvResponse);
        return $response;
    }

}
