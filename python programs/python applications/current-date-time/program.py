import datetime
import glob2
listt=glob2.glob("*.txt")
#print(type(listt))
present=str(datetime.datetime.now().strftime("%Y-%m-%d-%H-%M-%S-%f"))
file1=open(present+".txt","w")
for i in listt:
    with open(i,"r") as file:
	      content =file.read()
    file1.write(content+"\n")
file1.close()