<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeminarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                
        //university
      
        DB::table('seminars')->insert([
            'id' => 1,
            'SeminarName' => 'Set Up Your Brilliant Career International Seminar and CV Workshop',
            'CategoryId' => '1',
            'Organizer' => 'Binus University - BNCC',
            'SeminarDate' => '2020-11-28 17:00:00',
            'SeminarLocation' => 'Anggrek Campus Auditorium, BINUS University',
            'Price' => 70000,
            'Description' => 'Everybody has their own potential that may bring them to their brilliant career. Recognizing your potencial and planning your future are must-do things for surviving in the intense competition in the career world, and now is the time be extraordinary by starting to improve, explore and develop our talent.',
            'SeminarPhoto' => 'univ1.jpg',
            'Status' => 'Approved',
            
        ]);
        DB::table('seminars')->insert([
            'id' => 2,
            'SeminarName' => 'Seminar dan Talkshow BINUS University – Ideapreneur',
            'CategoryId' => '1',
            'Organizer' => 'HIMME School of Business Management Student Association BINUS University',
            'SeminarDate' => '2021-01-13 13:00:00',
            'SeminarLocation' => 'Auditorium Anggrek Campus BINUS University. Kebon Jeruk, Jakarta Barat',
            'Price' => 50000,
            'Description' => 'This seminar & talkshow activity aims to increase and hone the skills of seminar & talkshow participants to become entrepreneurs. With the aim of fostering an entrepreneurial spirit so that he can make his own business into a creative businessman, so that he has a unique and different business from existing businesses.',
            'SeminarPhoto' => 'univ2.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 3,
            'SeminarName' => 'National Cyber Week',
            'CategoryId' => '1',
            'Organizer' => 'Cyber Security Community BINUS University',
            'SeminarDate' => '2021-01-22 09:00:00',
            'SeminarLocation' => 'Daring via Zoom',
            'Price' => 50000,
            'Description' => 'National Cyber ​​Week is a series of events consisting of the CTF Competition, seminars and workshops on a national scale. The entire series of events is open to active students throughout Indonesia and will be held online at the time stated in the post above.',
            'SeminarPhoto' => 'univ3.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 4,
            'SeminarName' => 'HIMME Festival International Seminar & Talkshow',
            'CategoryId' => '1',
            'Organizer' => 'HIMME BBS SA',
            'SeminarDate' => '2021-01-28 11:00:00',
            'SeminarLocation' => 'Auditorium BINUS Alam Sutera',
            'Price' => 90000,
            'Description' => '“Digital Era: A Convenient Way of Life” Let’s discover your digital life! By time the industries has shifted into 4.0, when everything becomes practical through technology. As the young generation, we have to involve in developing this future industry.',
            'SeminarPhoto' => 'univ4.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 5,
            'SeminarName' => 'BSSC Earth Hour 2018 – “OUR EARTH, OUR FUTURE”',
            'CategoryId' => '1',
            'Organizer' => 'BSSC BINUS University',
            'SeminarDate' => '2021-02-12 20:00:00',
            'SeminarLocation' => 'BINUS UNIVERSITY Kampus Anggrek',
            'Price' => 0,
            'Description' => 'BSSC Earth Hour is a social project where we as one of the active student organizations want to be part of the pioneers of saving the earth through positive and beneficial activities. The Earth Hour event is an annual event held in almost every country by people of all ages as a form of saving the earth by taking positive actions, especially turning off electronic use for 60 minutes on December 17. The theme we took for this years activity was "Our Earth, Our Future" where we want to contribute through small things to make changes for the better for our earth.',
            'SeminarPhoto' => 'univ5.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 6,
            'SeminarName' => 'International Seminarch',
            'CategoryId' => '1',
            'Organizer' => 'HIMARS atau Himpunan Mahasiswa Arsitektur universitas Bina Nusantara',
            'SeminarDate' => '2021-02-15 13:00:00',
            'SeminarLocation' => 'Auditorium Anggrek, Binus University, Jakarta Barat',
            'Price' => 100000,
            'Description' => 'As an organization engaged in the field of Architecture, HIMARS or the Bina Nusantara University Architecture Student Association held the event to accommodate Architects and Architecture students to learn how to become an open-minded Architect and how to develop “Smart Living” itself with professional and well-known speakers at in the world of Architecture, Architect students can also get to know more professional architects, to show the existence of the Department of Architecture at Bina Nusantara University both nationally and internationally, etc.',
            'SeminarPhoto' => 'univ6.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 7,
            'SeminarName' => 'SAP Business One',
            'CategoryId' => '1',
            'Organizer' => 'Ruang 0903 BINUS Bandung',
            'SeminarDate' => '2021-02-20 12:00:00',
            'SeminarLocation' => 'Binus Bandung',
            'Price' => 0,
            'Description' => ' The purpose of this seminar is that students are expected to obtain standard process management concepts from SAP, get an overview of operating and configuring SAP in a project, so that students can see more clearly the SAP B-One training method in BINUS CENTER.',
            'SeminarPhoto' => 'univ7.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 8,
            'SeminarName' => 'Himme Festival : International Seminar & Talkshow',
            'CategoryId' => '1',
            'Organizer' => 'Ruang 0903 BINUS Bandung',
            'SeminarDate' => '2021-02-27 13:00:00',
            'SeminarLocation' => 'BINUS University Alam Sutera, Jl. Jalur Sutera Bar., Panunggangan Tim., Serpong, Kota Tangerang, Banten- 15143',
            'Price' => 90000,
            'Description' => 'Himme Festival: International Seminar & Talkshow is an international standard seminar where students will get a lot of learning about digital life.',
            'SeminarPhoto' => 'univ8.jpg',
            'Status'=> 'Approved'
            
        ]);


        //free seminar & ws
        DB::table('seminars')->insert([
            'id' => 9,
            'SeminarName' => 'Risk & Sustainability During Covid 19 Crisis For Small Medium Entities Business',
            'CategoryId' => '2',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-03-04 13:30:00',
            'SeminarLocation' => 'Zoom',
            'Price' => 0,
            'Description' => 'For the past few months, Covid-19 makes extraordinary impact on the economy of society and the country. The unpredictable situations cause a lot of losses in the company’s operational activities for making profits.',
            'SeminarPhoto' => 'sf4.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 10,
            'SeminarName' => 'Cloud Computing Primadona Perkembangan IT',
            'CategoryId' => '2',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-03-14 14:00:00',
            'SeminarLocation' => 'Mawar 5 Pekan baru',
            'Price' => 0,
            'Description' => 'Sepanjang tahun 2012, industri TI sudah cukup sering diramaikan dengan informasi seputar cloud computing. Ya, komputasi awan memang bak menjadi primadona dari para vendor TI. Layanan ini pun dipercaya sebagai model IT masa depan.',
            'SeminarPhoto' => 'sf5.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 11,
            'SeminarName' => 'Hi, Young Entrepreneurs!',
            'CategoryId' => '2',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-03-25 11:00:00',
            'SeminarLocation' => 'BINUS @Anggrek Campus, Room 800 (8th floor)',
            'Price' => 0,
            'Description' => 'BiSA (BINUS Startup Accelerator) is hosting the 2nd Young Entrepreneurs Talk. Young Entrepreneurs Talk is a series of hands-on panel, workshops, and meet up sessions with young entrepreneurs, startup mentors, business experts, and corporate, and this time, we will talk about Fundraising!',
            'SeminarPhoto' => 'sf6.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 12,
            'SeminarName' => 'Peace With Ourselves by Avoiding Self Harm',
            'CategoryId' => '2',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-03-29 13:00:00',
            'SeminarLocation' => 'Zoom',
            'Price' => 0,
            'Description' => 'Psycoweek: Cara Berdamai dengan Diri Sendiri dengan Menghindari Melukai Diri Sendiri',
            'SeminarPhoto' => 'sf7.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 13,
            'SeminarName' => 'Seminar Kesehatan Online',
            'CategoryId' => '2',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-04-13 14:30:00',
            'SeminarLocation' => 'Zoom',
            'Price' =>  0,
            'Description' => 'Sehat dan Bahagia',
            'SeminarPhoto' => 'sf8.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 14,
            'SeminarName' => 'Industrial Seminar',
            'CategoryId' => '2',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-04-15 13:00:00',
            'SeminarLocation' => 'Nibong Tebai Pulau Pinang',
            'Price' =>  0,
            'Description' => 'Kegiatan ini diharapkan mampu memberikan pengetahuan lebih terkait K3 kepada mahasiswa sebagai bekal untuk prospek dunia kerja kedepannya.',
            'SeminarPhoto' => 'sf10.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 15,
            'SeminarName' => 'Lezatnya Bisnis Kuliner',
            'CategoryId' => '2',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-04-23 17:00:00',
            'SeminarLocation' => '',
            'Price' =>  0,
            'Description' => 'Cara membuka bisnis kuliner dan strateginya',
            'SeminarPhoto' => 'sf11.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 16,
            'SeminarName' => 'Strategi Membangun Bisnis Makanan',
            'CategoryId' => '2',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-04-26 12:00:00',
            'SeminarLocation' => 'Youtube',
            'Price' =>  0,
            'Description' => 'Meneropong Arah Kebijakan Kurikulum Mendikbud Baru',
            'SeminarPhoto' => 'sf12.jpg',
            'Status'=> 'Approved'
            
        ]);
        
        
        //paid
        
        DB::table('seminars')->insert([
            'id' => 17,
            'SeminarName' => 'Seminar Nasional Teknologi Informasi 2019',
            'CategoryId' => '3',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-05-12 14:00:00',
            'SeminarLocation' => 'B Hotel Bali & Spa',
            'Price' => 85000,
            'Description' => 'Mengetahui perkembangan Teknologi di 2019',
            'SeminarPhoto' => 'sb1.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 18,
            'SeminarName' => 'Ketahanan Air Terhadap Perubahan Lingkungan',
            'CategoryId' => '3',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-04-14 07:00:00',
            'SeminarLocation' => 'Ruang Seminar Lt.3 FISIP UPN',
            'Price' => 35000,
            'Description' => 'Menganalisa air pada lingkungan dan ketahananya',
            'SeminarPhoto' => 'sb2.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 19,
            'SeminarName' => 'Financial Planning & Wealt Management',
            'CategoryId' => '3',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-04-20 08:30:00',
            'SeminarLocation' => 'Kampus Umar Usman, Jakarta Selatan',
            'Price' => 50000,
            'Description' => 'Financial Planning & Wealt Management.The definition of financial advice is extremely broad. The type of advice given, along with the products offered and the types of clients served, determine whether you are considered a financial planner or wealth manager. Financial planning and wealth management represent subsets of financial advising.',
            'SeminarPhoto' => 'sb3.jpg',
            'Status'=> 'Approved'
            
        ]);
        DB::table('seminars')->insert([
            'id' => 20,
            'SeminarName' => 'Soft Skill untuk Sekretaris',
            'CategoryId' => '3',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-04-27 09:00:00',
            'SeminarLocation' => 'Jl.Menteng raya no.9, Jakarta Pusat',
            'Price' => 150000,
            'Description' => 'Penguasaan soft skill sekretaris akan menentukan keberhasilan mereka dan organisasinya.',
            'SeminarPhoto' => 'sb9.jpg',
            'Status'=> 'Approved'
        ]);
        DB::table('seminars')->insert([
            'id' => 21,
            'SeminarName' => 'Interior Design Workshop & Seminar',
            'CategoryId' => '3',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-05-23 10:00:00',
            'SeminarLocation' => 'Jl.Kb.Melati 5 no.20, Jakarta Pusat',
            'Price' => 120000,
            'Description' => 'Seminar ini juga akan dilengkapi dengan workshop dengan tema “Modularity: Arranging Simple Units” yang dipandu oleh Pracista Dhira Prameswari dan Rico Firmansyah, dimana mereka akan berbagi mengenai cara berfikir kreatif dan membuat modul prototype dengan berbahan dasar cardboard.',
            'SeminarPhoto' => 'sb10.jpg',
            'Status'=> 'Approved'
        ]);
        DB::table('seminars')->insert([
            'id' => 22,
            'SeminarName' => 'Ways To Find out, What Business are needed in the future',
            'CategoryId' => '3',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-05-25 12:00:00',
            'SeminarLocation' => 'Royal Craft Center, Royal Plaza Surabaya',
            'Price' => 30000,
            'Description' => 'The workplace of the 20th century is no more. In my view, its remnants of menial labor and tasks completed by hand are soon to simply a vestigial tail of a bygone era. The future of work lies in the digital world. ',
            'SeminarPhoto' => 'sb11.jpg',
            'Status'=> 'Approved'
        ]);
        DB::table('seminars')->insert([
            'id' => 23,
            'SeminarName' => 'Womenpreneur',
            'CategoryId' => '3',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-06-01 17:00:00',
            'SeminarLocation' => 'Kuningan City',
            'Price' => 75000,
            'Description' => ' Dalam aktivitas ekonomi, peran perempuan tidak hanya memberikan peran dalam memperkuat ketahanan ekonomi keluarga, namun juga mampu menjadi penggerak ekonomi masyarakat.',
            'SeminarPhoto' => 'sb12.jpg',
            'Status'=> 'Approved'
        ]);
        DB::table('seminars')->insert([
            'id' => 24,
            'SeminarName' => 'Challenge Your Limit & Break Them',
            'CategoryId' => '3',
            'Organizer' => 'GoSeminar',
            'SeminarDate' => '2021-06-19 18:00:00',
            'SeminarLocation' => 'Wijaya IX no.23 melawai, Jakarta Selatan',
            'Price' => 120000,
            'Description' => 'Membagikan kisah perjalanan sukses yang telah dicapai pada masing – masing bidang serta akan memberikan tips & trik sukses untuk memulai sebuah bisnis.',
            'SeminarPhoto' => 'sb13.jpg',
            'Status'=> 'Approved'
        ]);
    }
}