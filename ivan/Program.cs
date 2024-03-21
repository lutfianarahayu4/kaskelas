// See https://aka.ms/new-console-template for more information
using System;
using System.Diagnostics;
using System.Diagnostics.Eventing.Reader;

namespace Calc
{
    class program
    {
        static void Main(string[] args)
        {
            int respon = 0;
            do
            {
                Console.WriteLine("Mulai Program");
                Console.WriteLine("1 Mulai");
                Console.WriteLine("2 Tidak");

                int perhitungan = Convert.ToInt32(Console.ReadLine());

                if (perhitungan == 1) ;
                {
                    Console.WriteLine("==============================");
                    Console.WriteLine("==============================");
                    Console.WriteLine("===============Calc===========");
                    Console.WriteLine("==============================");
                    Console.WriteLine("==============================");
                    Console.WriteLine("Pilih Menu");
                    Console.WriteLine("1.Volume Kubus");
                    Console.WriteLine("2.Volume Balok");
                    Console.WriteLine("3.Volume Tabung");
                    int lanjut = Convert.ToInt32(Console.ReadLine());

                    switch (lanjut)
                    {
                        case 1:
                            Console.WriteLine("1.Volume Kubus");
                            Console.WriteLine("2.Volume Balok");
                            Console.WriteLine("3.Volume Tabung");

                            int Lanjut = Convert.ToInt32(Console.ReadLine());

                            break;

                            switch (Lanjut)
                            {
                                case 1:
                                    Console.WriteLine("Masukan Angka");
                                    double K = Convert.ToDouble(Console.ReadLine());
                                    double hasil = K * K * K;
                                    Console.WriteLine("Hasilnya Adalah =" + hasil);

                                    break;

                                case 2:
                                    Console.WriteLine("Masukan Panjang ");
                                    double P = Convert.ToDouble(Console.ReadLine());
                                    Console.WriteLine("Masukan Lebar");
                                    double L = Convert.ToDouble(Console.ReadLine());
                                    Console.WriteLine("Masukan Tinggi");
                                    double T = Convert.ToDouble(Console.ReadLine());
                                    double result = P * L * T;
                                    Console.WriteLine("Hasilnya Adalah =" + result);

                                    break;

                                case 3:
                                    Console.WriteLine("Masukan Phi");
                                    double Phi = Convert.ToDouble(Console.ReadLine());
                                    Console.WriteLine("Masukan R");
                                    double R = Convert.ToDouble(Console.ReadLine());
                                    Console.WriteLine("Masukan r");
                                    double r = Convert.ToDouble(Console.ReadLine());
                                    Console.WriteLine("Masukan t");
                                    double t = Convert.ToDouble(Console.ReadLine());
                                    double alamak = Phi * R * r * t;
                                    Console.WriteLine("Hasilnya Adalah =" + alamak);

                                    int cool = Convert.ToInt32(Console.ReadLine());

                                    break;

                                default:
                                    Console.WriteLine("Silahkan Pilih Antara 3 Tersebut");

                                    break;
                            }
                    }
                    else if (perhitungan == 2)
                    {
                        Console.WriteLine("TerimaKasih Atas Kunjungan");
                    }
                else
                {
                    
                }
                    Console.WriteLine("Pilih Salah Satu Dari 2 Diatas");
                  }
                  Console.WriteLine("Apakah Anda Ingin Mengulangi?");
                  Console.WriteLine("1.Ya");
                  Console.WriteLine("2.Tidak");
                {while(respon == 1);
            }
        }
    }
    
    
