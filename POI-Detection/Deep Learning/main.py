import cv2 #pip install opencv-python
import matplotlib.pyplot as plt # pip install matplotlib

config_file='ssd_mobilenet_v3_large_coco_2020_01_14.pbtxt'
frozen_model = 'frozen_inference_graph.pb'

model = cv2.dnn_DetectionModel(frozen_model,config_file)

classLabels = [] ## empty list of python
file_name= 'Labels.txt'
with open(file_name , 'rt') as fpt:
    classLabels = fpt.read().rstrip('\n').split('\n')
    #classLabels.append(fpt.read())

#print(classLabels)
#print(len(classLabels))

cap = cv2.VideoCapture('RundfahrtdurchChemnitzmitdemAuto.mp4')
if not cap.isOpened():
    cap = cv2.VideoCapture(0)
if not cap.isOpened():
    raise IOError("can not open video")
    
font_scale = 3
font = cv2.FONT_HERSHEY_PLAIN

while True:
    ret,frame = cap.read()
    
    classIndex, confidence ,bbox = model.detect(frame,confThreshold=0.55)
    
    print(classIndex)
    if (len(classIndex)!=0):
        for ClassInd, conf ,boxes in zip(classIndex.flatten(),confidence.flatten(),bbox):
            if(ClassInd<=80):
                cv2.rectangle(frame,boxes,(255,0,0),2)
                cv2.putText(frame,classLabels[ClassInd-1],(boxes[0]+10,boxes[1]+40),font,fontScale=font_scale,color=(0,255,0),thickness=3)
    cv2.imshow('ADM_Project',frame)
    
    if cv2.waitKey(2) & 0xFF ==ord('q'):
        break
cap.release()
cv2.destroyAllWindows()