using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Permaculture_Animal.Models;

namespace Permaculture_Animal.Controllers
{
    public class tblSpeciesController : Controller
    {
        private AnimalDBEntities db = new AnimalDBEntities();

        // GET: tblSpecies
        

        public ActionResult Index(string strSearch)
        {

            //var tblAnimals = db.tblAnimals.Include(t => t.tblDisease).Include(t => t.tblSpecy);
            //return View(tblAnimals.ToList());

            var Species = from b in db.tblSpecies
                          select b;

            //var Specis = from c in Animals
            //                  orderby c.AnimalSex
            //                  select c.AnimalSex;

            //ViewBag.Gender = new SelectList(speciesList.Distinct());

            //Search records by Animal Name 
            if (!string.IsNullOrEmpty(strSearch))
                Species = Species.Where(m => m.SpeciesName.Contains(strSearch));

            ////Search records by Species

            //if (!string.IsNullOrEmpty(Gender))
            //    Animals = Animals.Where(m => m.AnimalSex == Gender);
            return View(Species);

        }


        // GET: tblSpecies/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblSpecy tblSpecy = db.tblSpecies.Find(id);
            if (tblSpecy == null)
            {
                return HttpNotFound();
            }
            return View(tblSpecy);
        }

        // GET: tblSpecies/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: tblSpecies/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include = "SpeciesID,SpeciesName")] tblSpecy tblSpecy)
        {
            if (ModelState.IsValid)
            {
                db.tblSpecies.Add(tblSpecy);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(tblSpecy);
        }

        // GET: tblSpecies/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblSpecy tblSpecy = db.tblSpecies.Find(id);
            if (tblSpecy == null)
            {
                return HttpNotFound();
            }
            return View(tblSpecy);
        }

        // POST: tblSpecies/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include = "SpeciesID,SpeciesName")] tblSpecy tblSpecy)
        {
            if (ModelState.IsValid)
            {
                db.Entry(tblSpecy).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(tblSpecy);
        }

        // GET: tblSpecies/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            tblSpecy tblSpecy = db.tblSpecies.Find(id);
            if (tblSpecy == null)
            {
                return HttpNotFound();
            }
            return View(tblSpecy);
        }

        // POST: tblSpecies/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            tblSpecy tblSpecy = db.tblSpecies.Find(id);
            db.tblSpecies.Remove(tblSpecy);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
