library(C50)
library(caret)
library(caTools)
library(pROC)

#to active the arguments of cmd
args = commandArgs(TRUE)

#load the data
dataset = read.csv("c:/xampp/htdocs/kredit/assets/r/dataset.csv")
dataset$status_kredit = as.factor(dataset$status_kredit)
dataset$usia = as.factor(dataset$usia)
dataset$pendapatan = as.factor(dataset$pendapatan)
dataset$status_pernikahan = as.factor(dataset$status_pernikahan)
dataset$jenis_kelamin = as.factor(dataset$jenis_kelamin)
dataset$pekerjaan = as.factor(dataset$pekerjaan)
dataset$waktu_angsuran = as.factor(dataset$waktu_angsuran)
dataset$jumlah_pinjaman = as.factor(dataset$jumlah_pinjaman)

#split data to train and test set
split = sample.split(dataset$status_kredit, SplitRatio = 0.80)
train_set = subset(dataset, split == TRUE)
test_set = subset(dataset, split == FALSE)

#get the accuracy
pola = C5.0(train_set[,-8], train_set[,8])
pred_test = predict(pola, test_set[,-8])
tab = table(actual = test_set[,8], predicted = pred_test)
hasil = confusionMatrix(tab)

#pred_prob = predict(pola, test_set[,-8], type = "prob")
#roc(test_set$status_kredit, pred_prob[,2], plot = TRUE, xlab="False Positive Rate", ylab="True Positive Rate", col="#377eb8", lwd=4, legacy.axes=TRUE, print.auc=TRUE)

#save the tree to png
png("c:/xampp/htdocs/kredit/assets/r/tree.png", width = 5500, height = 3000)
plot(pola, type="s", main="Decision Tree")
dev.off()

#write the result of the prediction to csv
write.table(train_set, file = "c:/xampp/htdocs/kredit/assets/r/train_set.csv", sep = ",", row.names = FALSE)
write.table(test_set, file = "c:/xampp/htdocs/kredit/assets/r/test_set.csv", sep = ",", row.names = FALSE)

#save the accuracy to txt
sink("c:/xampp/htdocs/kredit/assets/r/akurasi.txt")
cat("Confusion Matrix", "\n\n")
print(hasil[["table"]])
cat("\n","Akurasi = ")
cat(hasil[["overall"]][["Accuracy"]])
sink()
