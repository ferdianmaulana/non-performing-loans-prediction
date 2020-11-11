library(C50)

#to active the arguments of cmd
args = commandArgs(TRUE)

#load the data
data_training = read.csv("c:/xampp/htdocs/kredit/assets/r/train_set.csv")
data_training$status_kredit = as.factor(data_training$status_kredit)
data_training$status_pernikahan = as.factor(data_training$status_pernikahan)
data_training$jenis_kelamin = as.factor(data_training$jenis_kelamin)
data_training$pekerjaan = as.factor(data_training$pekerjaan)
data_training$waktu_angsuran = as.factor(data_training$waktu_angsuran)
data_training$usia = as.factor(data_training$usia)
data_training$pendapatan = as.factor(data_training$pendapatan)
data_training$jumlah_pinjaman = as.factor(data_training$jumlah_pinjaman)

#create model
model = C5.0(data_training[,-8], data_training[,8])

#predict new creditor
databaru = read.csv("c:/xampp/htdocs/kredit/assets/r/databaru.csv")
pred = predict(model, databaru[, -8])

#write the result of the prediction to csv
write.table(pred, file = "c:/xampp/htdocs/kredit/assets/r/hasilpred.csv", sep = ",", col.names = FALSE, qmethod = "double"
            , row.names=FALSE)
