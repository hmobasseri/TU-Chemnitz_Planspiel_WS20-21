<div align="center">
  <img src="https://www.adm-tech.de/images/logoadm.png">
</div>
<div align="center">
  <h1><strong>ADM-Tech</strong></h1>
  
  <h2>SmartRail Application</h2>
</div>

<div>
    Main Page of the web site <a href="https://www.adm-tech.de">https://www.adm-tech.de</a>
</div>
<div>
    
<p>For using our service, you can go to the main web site and click on services.</p>
<p>The smartRail application has 3 versions and during the planspiel we added more features,  the app has been updated it regularly</p>

<h5> or You can click on each version listed below</h5>
<ul>
    <li><a href="https://www.adm-tech.de/v1">Version 1</a></li>
    <li><a href="https://www.adm-tech.de/v2">Version 2</a></li>
    <li><a href="https://www.adm-tech.de/v3">Version 3</a></li>
</ul>
</div>
<div>
    <p>For the first step, we widely used Map API and GPS for finding locations. All code here has been written in JavaScript, and HTML5, and CSS3 and each feature has a particular directory and all code has been found in it.all features are listed below:</p>
    <ul>
    <li>Locate The Train</li>
    <li>Search By Name</li>
    <li>Direction</li>
    <li>Distance</li>
    <li>Weather</li>
</ul>
</div>
<div>
    <p>The ADM-Tech is focused on detecting POI dynamically, in this case, we provided some feature for detecting all POI in a different way:</p>
    <ul>
    <li>POI-GeoJSON</li>
    <li>POI-MAP</li>
    <li>POI-Search</li>
    <li>POI-Detection(Dynamiclly)</li>
    </ul>
</div>
<div>
    <p>The most important part for our company is detecting POI in a dynamic way, so we used these tools and algorithms</p>
    <h4>image innotation and labling</h4>
    <a href="https://github.com/tzutalin/labelImg">image label tool</a>
    <div>
    $ pip -h <br>
    $ conda install pyqt=5 <br>
    $ conda install -c anaconda lxml <br>
    $ pip3 install pipenv <br>
    $ pipenv run pip install pyqt5==5.12.1 lxml <br>
    $ pipenv run make qt5py3 <br>
    $ pipenv run python3 labelImg.py <br>
    </div>
    <p>In the repository in the directory POI-Detection you can find:</p>
    <ul>
    <li>Train-Class(the calsses we created for annotation and labling)</li>
    <li>model-borderBox-annotation
     <ul>
     <li>labels : There are all lables for all images that has been annotated</li>
     <li>images:we provided all images for feeding ML</li>
     </ul>
    </li>
    <li>Deep-Learning (we provided code for object detections)</li>
    <li>YOLO 3 , 4 , 5
    <ul>
     <li>Image Detection</li>
     <li>Video Detection</li>
     <li>Dynamic Camera Detection</li>
     </ul>
     </li>
    </ul>
</div>
<div>
    <h1>Install</h1>
  
$ pip install --upgrade https://storage.googleapis.com/tensorflow/mac/cpu/tensorflow-0.12.0-py3-none-any.whl <br>
$ pip3 install --upgrade https://storage.googleapis.com/tensorflow/mac/cpu/tensorflow-1.0.0-py3-none-any.whl <br>
$ pip install --upgrade --ignore-installed tensorflow-gpu <br>
$ conda install -c anaconda protobuf <br>
$ pip install pillow jupyter lxml <br>
$ pip install matplotlib <br>
$ pip install pandas opencv-python <br>
    
</div>

<div>
    
<h4>YOLO 5</h4>
<a href="https://github.com/ultralytics/yolov5">YOLO5</a>
<h2>Requirements</h2>

<p>Python 3.x  [requirements.txt] <br>
$ pip install -r requirements.txt
</p>

</div>

<div>
    
<h1>detection</h1>
<p>
detect.py runs inference on a many of sources <br>
$ python detect.py --source 0  # webcam <br>
               &nbsp;&nbsp;            file.jpg  # image <br>
               &nbsp;&nbsp;             file.mp4  # video 
</p>
                            

</div>

