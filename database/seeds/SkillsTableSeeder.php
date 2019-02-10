<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $all_jobs = "Accounting	- Executive	- Manufacturing- Admin & Clerical	- Franchise	- Nonprofit- Banking & Finance	- Government	- Part Time- Business Opportunities	- Health Care	- Retail -Contract & Freelance	- Hospitality	- Sales & Marketing- Customer Service	- Human Resources	- Science & Biotech- Diversity Opportunities	- Information Technology	- Transportation- Engineering	- Internships & College- Accounting	- General Business	- Other- Admin & Clerical	- General Labor	- Pharmaceutical- Automotive	- Government	- Professional Services- Banking	- Grocery	- Purchasing - Procurement- Biotech	- Health Care	- QA - Quality Control - Broadcast - Journalism	- Hotel - Hospitality	- Real Estate- Business Development	- Human Resources	- Research- Construction	- Information Technology	- Restaurant - Food Service - Consultant	- Installation - Maint - Repair	- Retail - Customer Service	- Insurance	- Sales - Design	- Inventory	- Science- Distribution - Shipping	- Legal	- Skilled Labor - Trades- Education - Teaching	- Legal Admin	- Strategy - Planning- Engineering	- Management	- Supply Chain- Entry Level - New Grad	- Manufacturing	- Telecommunications- Executive	- Marketing	- Training- Facilities	- Media - Journalism - Newspaper	- Transportation- Finance	- Nonprofit - Social Services	- Warehouse- Franchise	- Nurse";

        $jobs = explode("-", $all_jobs);

        foreach ($jobs as $job)
        {
            // DB::table('jobs')->insert([
            //     'job' => $job
            // ]);
            Skill::create([
                'skill' => $job,
            ]);
        }
    }
}
